<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Gabriel Resplande',
                'email' => 'gbl_marcelino@hotmail.com',
                'password' => bcrypt('teste652')

            ]
        );
    }
}
