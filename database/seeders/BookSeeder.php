<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->truncate();
        DB::table('books')->insert([
            'title'=>'title1',
            'description'=>'description1',
            'type'=>'type1',
            'price'=>'1000',
            
        ]);
        DB::table('books')->insert([
            'title'=>'title2',
            'description'=>'description2',
            'type'=>'type2',
            'price'=>'2000',
            
        ]);
        DB::table('books')->insert([
            'title'=>'title3',
            'description'=>'description3',
            'type'=>'type3',
            'price'=>'3000',
            
        ]);
        DB::table('books')->insert([
            'title'=>'title4',
            'description'=>'description4',
            'type'=>'type4',
            'price'=>'4000',
            
        ]);
                DB::table('books')->insert([
            'title'=>'title5',
            'description'=>'description5',
            'type'=>'type5',
            'price'=>'5000',
            
        ]);
        DB::table('books')->insert([
            'title'=>'title6',
            'description'=>'description6',
            'type'=>'type6',
            'price'=>'6000',
            
        ]);
        DB::table('books')->insert([
            'title'=>'title7',
            'description'=>'description7',
            'type'=>'type7',
            'price'=>'7000',
            
        ]);
        DB::table('books')->insert([
            'title'=>'title8',
            'description'=>'description8',
            'type'=>'type8',
            'price'=>'8000',

            
        ]);
    }
}
