<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program')->insert([
            "judul" => "SBMPT 2019",
            "deskripsi" => "Bimbingan di Brawijaya Intensive Centre persiapan Tes Center SBMPTN 2019 untuk Alumni dan SMA XII ada 4 program, yaitu:Super Intensive, Kedokteran, Saintek, Soshum.",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
        DB::table('program')->insert([
            "judul" => "Kedinasan",
            "deskripsi" => "Karantina Kedinasan adalah program yang dikhususkan untuk siswa/i untuk mempersiapan masuk Sekolah Kedinasan, seperti Politeknik Keuangan Negara Sekolah Tinggi Akuntansi Negara (PKN STAN), Institut Pemerintahan Dalam Negeri (IPDN), Sekolah Tinggi Ilmu Statistik (STIS), AKPOL, AKMIL, STEM/Akamigas, POLTEKIP, STKS, STP, Sekolah Tinggi Transportasi Darat (STTD), Sekolah Tinggi Meteorologi Klimatologi dan Geofisika (STMKG), Sekolah Tinggi Sandi Negara (STSN) , Sekolah Tinggi Intelijen Negara (STIN), Politeknik Imigrasi (POLTEKIM)",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
        DB::table('program')->insert([
            "judul" => "Mandiri PTN/PTS",
            "deskripsi" => "Karantina Persiapan ujian Mandiri PTN/ PTS dipersiapakn untuk Siswa/i yang ingin mempersiapakan diri untuk ujian masuk Perguruan tinggi Tes Mandiri baik di PTN/ PTS di Berbagai jurusan terutama Jurusan Pendidikan Dokter Umum",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
        DB::table('program')->insert([
            "judul" => "Olimpiade",
            "deskripsi" => "Program Olimpiade dikhusukan untuk Siswa SD, SMP, dan SMA untuk menyiapkan Siswa/i yang akan mengikuti Olimpiade baik tingkat kota, Kabupaten, Provinsi, Nasional maupun Internasional, sehingga diharapkan Siswa/i yang telah mengikuti Program Karantina Olimpiade ini benar-benar siapa menghadapi hari H",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
        DB::table('program')->insert([
            "judul" => "TPA OTO BAPPENAS",
            "deskripsi" => "TPA OTO BAPPENAS adalah program untuk mnegetahui kemampuan seseorang di bidang Verbal, Numerikal dan Logika, Tes Potensi Akademik di butuhkan dimana-mana, baik tes BUMN/BUMS, Syarat lulus kuliah, Ambil Kuliah S2/S3, semuanya membutuhkan TPA untuk kenaikan pangkat dan sebagainya.",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
        DB::table('program')->insert([
            "judul" => "Psikotes",
            "deskripsi" => "Program Psikotes adalah program untuk mempersiapakan tes kepribadian, baik mulai dari SD, SMP, SMA, dan Umum. diantaranya digunakan sebagai syarat untuk pendaftaran, kenaikan pangkat, dan sebaginya sesuai dengan kebutuhan yang dinginkan.",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
        DB::table('program')->insert([
            "judul" => "PPDS",
            "deskripsi" => "Program PPDS adalah program untuk mempersiapkan ujian masuk Pendidikan Profesi di Kedokteran",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
        DB::table('program')->insert([
            "judul" => "CPNS",
            "deskripsi" => "Program bimbingan CPNS adalah untuk mempersiapkan calon-calon PNS agar siap menghadapi tes CAT yang diadakan",
            "harga" => 0,
            "dp" => 0,
            "created_at" => date("Y-m-d")
        ]);
    }
}
