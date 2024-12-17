<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classnames;

class classnames_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'nama_kelas' => '1A',
                'tingkat' => '1',
            ],
            [
                'nama_kelas' => '1B',
                'tingkat' => '1',
            ],
            [
                'nama_kelas' => '1c',
                'tingkat' => '1',
            ],
            [
                'nama_kelas' => '2A',
                'tingkat' => '2',
            ],
            [
                'nama_kelas' => '2B',
                'tingkat' => '2',
            ],
            [
                'nama_kelas' => '2C',
                'tingkat' => '2',
            ],
            [
                'nama_kelas' => '3A',
                'tingkat' => '3',
            ],
            [
                'nama_kelas' => '3B',
                'tingkat' => '3',
            ],
            [
                'nama_kelas' => '3C',
                'tingkat' => '3',
            ]

        ];
        foreach ($classes as $data)
        {
            $kelas = new Classnames();

            $kelas->nama_kelas = $data['nama_kelas'];
            $kelas->tingkat = $data['tingkat'];
            $kelas->save();
        }
    }
}
