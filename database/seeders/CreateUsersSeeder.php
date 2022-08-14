<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Musryanti',
               'email'=>'Musry@polbeng.student.com',
               'type'=>0,
               'password'=> bcrypt('Musry123'),
               'jabatan'=> 'Mahasiswa',
               'nama_instansi'=> 'Politeknik Negeri Bengkalis'
            ],
            [
               'name'=>'Desi Amirullah',
               'email'=>'andes@polbeng.com',
               'type'=> 0,
               'password'=> bcrypt('Andes123'),
               'jabatan'=> 'Dosen',
               'nama_instansi'=> 'Politeknik Negeri Bengkalis'
            ],
            [
               'name'=>'Industri',
               'email'=>'user@industri.com',
               'type'=>1,
               'password'=> bcrypt('Industri123'),
            ],
            [
                'name'=>'Industri2',
                'email'=>'user2@industri.com',
                'type'=>1,
                'password'=> bcrypt('Industri123'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
