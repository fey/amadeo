<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('laravel')->table('account_user')->insert([
            [
                'user_id'    => 1,
                'login'      => 'test',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id'    => 1,
                'login'      => 'Akakol',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id'    => 1,
                'login'      => 'mc040694',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id'    => 1,
                'login'      => 'feycot4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id'    => 1,
                'login'      => 'mytestaccount123456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
