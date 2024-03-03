<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ttl = date('Y-m-d', strtotime('28-05-2004'));
        DB::insert('insert into mhs_profile (id_mhs, nm_mhs, alamat, ttl, status) values (?, ?, ?, ?, ?)', [41220559, 'Sutan Arsyah N', 'Jember', $ttl, 'active']);
    }
}
