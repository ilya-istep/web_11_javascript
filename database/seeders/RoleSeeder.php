<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->delete(); //другой способ
        // DB::table('roles')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'Администратор',
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Юзер',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Редактор',
        //     ],
        // ]);

        DB::table('roles')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Администратор',
            ],
            [
                'id' => 2,
                'name' => 'Покупатель',
            ],
            [
                'id' => 3,
                'name' => 'Редактор',
            ],
            [
                'id' => 4,
                'name' => 'SEO',
            ],
        ]);
    }
}