<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ProgramSeeder::class);
        // factory(App\Pengumuman::class, 15)->create();
        // factory(App\PengumumanUser::class, 25)->create();
        // factory(App\Beasiswa::class, 10)->create();
        factory(App\Grade::class, 5)->create();
    }
}
