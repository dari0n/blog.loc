<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'noname',
                'email' => 'noname@inratex.com',
                'password' => bcrypt(rand(1,100)),

            ],
            [
                'name' => 'author',
                'email' => 'author@inratex.com',
                'password' => bcrypt(123123),
            ]
        ];

        DB::table('users')->insert($data);
    }
}
