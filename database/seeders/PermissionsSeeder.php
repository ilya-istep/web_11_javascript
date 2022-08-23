<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'правка',
            ],
            [
                'id' => 2,
                'name' => 'чтение',
            ],
            [
                'id' => 3,
                'name' => 'удаление',
            ],
        ]);

        $data = [];

        for($i =0; $i <= 4; $i++){

            $product = [
                'name' => Str::random(10),
            ];

            $data[] = $product;

        }

        DB::table('products')->insertOrIgnore($data);
    }
}
