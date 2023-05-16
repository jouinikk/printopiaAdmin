<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Clientseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'user_id'=>'1',
                'tauxReduction'=>'10'

            ],
            [
                'user_id'=>'2',
                'tauxReduction'=>'20'
            ]
        ];
        foreach($clients as $k => $v){
            Client::create($v);
        }
    }
}
