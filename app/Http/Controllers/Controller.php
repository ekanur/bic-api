<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $status = array(
    					200 => 'ok',
    					401 => 'unauthorized',
    					500 => 'server_error',
    					404 => 'not_found',
    				);

   	public function json($data, $status_code = 200)
   	{
   		if (!array_key_exists($status_code, $this->status)) {
   			return response()->json([$this->status[500] => 'status code '.$status_code.' unavailable'], 500);
   		}
   		
   		return response()->json([$this->status[$status_code] => $data], $status_code);
   	}
}
