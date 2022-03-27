<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ab_articlecategory;
use App\Models\ab_article;
use App\Models\User;


class DevelopmentData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        ab_articlecategory::truncate();
        ab_article::truncate();

        $csvFile = fopen(public_path("data\user.csv"),"r");

        $firstline = true;
        while(($data=fgetcsv($csvFile,2000,";"))!== FALSE){
            if(!$firstline){
                User::create([
                    "ab_name" => $data[1],
                    "ab_password" => $data[2],
                    "ab_mail" => $data[3]
                ]);
               
            }
            $firstline = false;
        }
        fclose($csvFile);

        $csvFile = fopen(public_path("data\articlecategory.csv"),"r");
        
        $firstline = true;
        while(($data=fgetcsv($csvFile,2000,";"))!== FALSE){
            if(!$firstline){    
                if($data[2] == "NULL")
                    $data[2] = NULL;
                
                ab_articlecategory::create([
                 "ab_name" => $data[1],  
                 "ab_parent" => $data[2]
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
        

        $csvFile = fopen(public_path("data\articles.csv"),"r");
        $firstline = true;
        while(($data=fgetcsv($csvFile,2000,";"))!== FALSE){        
            if(!$firstline){ 
                
            ab_article::create([
                "ab_name" => $data[1],
                "ab_price" => intval($data[2]),
                "ab_description" => $data[3],
                "ab_creator_id" => intval($data[4]),
                "ab_createdate" => $data[5]
            ]);
        }
        $firstline = false;
    }
    fclose($csvFile);
}

}

