<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'firstName'=>'abderrahmen',
                'lastName'=>'jouini',
                'email'=>'jouinikk1@gmail.com',
                'password'=>'abdou.jouini',
                'role'=>'admin',
                'phone'=>'52661883',
                'postalZip'=>'1074',
                'adresse'=>'10 rue Rossignole mourouj 2',
                'dateNais'=>'2002-04-03'
            ],
            [
                
                    'firstName'=>'Mohamed',
                    'lastName'=>'jilani',
                    'email'=>'medjilani27@gmail.com',
                    'password'=>'med.jilani',
                    'role'=>'admin',
                    'phone'=>'52661883',
                    'postalZip'=>'1074',
                    'adresse'=>'10 rue Rossignole mourouj 2',
                    'dateNais'=>'2002-04-03'
                
            ]
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }

}
