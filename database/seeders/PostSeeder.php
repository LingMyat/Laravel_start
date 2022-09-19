<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name'=> "JavaScript",
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque at, omnis delectus, sint enim ex voluptate fugiat veniam sed atque neque pariatur laudantium excepturi. Repudiandae amet.',
            'created_at'=>date("Y-m-d H:i:s")
        ]);
    }
}
