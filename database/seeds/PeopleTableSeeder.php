<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        	'name' => 'taro',
      		'mail' => 'taro@example.com',
        	'age'  => 10,
        ];
        DB::table('people') -> insert($param);

        $param = [
        		'name' => 'taro1019',
        		'mail' => 'taro@example.com',
        		'age'  => 19,
        ];
        DB::table('people') -> insert($param);


    }
}
