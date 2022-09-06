<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
        [   
            'npm'           => '2057051018',
            'nama'          => 'Bagus Tito Dwi Saputra',
            'alamat'        => 'Arizona',
            'created_at'    =>  Time::now()
        ],
        [   
            'npm'           => '2057051099',
            'nama'          => 'Nazgul',
            'alamat'        => 'Mordor',
            'created_at'    =>  Time::now()
        ],
        [   
            'npm'           => '9016021018',
            'nama'          => 'Enda',
            'alamat'        => 'Mars',
            'created_at'    =>  Time::now()
        ],
            
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data){
        $this->db->table('mahasiswa')->insert($data);
      }
    }
}
