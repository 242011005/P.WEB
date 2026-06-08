<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\ModelsPenduduk;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penduduk::create([
            'nik'=>'3507123456780001',
            'nama'=>'Budi Santoso',
            'jk'=>'L',
            'alamat'=>'Jl.Merdeka No. 10, RT01 RW 01'


        ])
        
        Penduduk::create([
            'nik'=>'3507123456780002',
            'nama'=>'Siti khotimah',
            'jk'=>'L',
            'alamat'=>'Jl.Mawar No. 05, RT02 RW 01'
            

        ])

        
    }
}
