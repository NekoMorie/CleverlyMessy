<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = [
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ],
            [
                'judul' => 'Ilmu Pengetahuan Tidak',
                'isi' => 'Bermain Sepeda Bersama-sama. Anjay Mabar 1234567890-=adfghjykyksfsjfk',
            ]

        ];
        foreach ($task as $data)
        {
            $gawean = new Task();

            $gawean->judul = $data['judul'];
            $gawean->isi = $data['isi'];
            $gawean->save();
        }
    }
}