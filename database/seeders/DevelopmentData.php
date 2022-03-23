<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;

class DevelopmentData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        articlecategory::truncate();

        $csvFile = fopen(base_path("C:\Users\Flexon\OneDrive - Fachhochschule Aachen\Dokumente\GitHub\abalo\public\data\articlecategory.csv"),"r");
        $firstline = true;
        while($data=fgetcsv($csfFile,1000,",")!== FALSE){
            if(!firstline){
                articlecategory::create([
                 "ab_name" = $data['1'];   
                 "ab_description" = $data['2']:
                 "ab_parent" = $data['3'];
                ])
            }
        }

    }
}
