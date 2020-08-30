<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class User_seeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create(
            array (
                'forename' => "Steven",
                'surname' => "Berrisford",
                'email' => "stevenberrisford@gmail.com",
                'password' => Hash::make("Qwerty12")
            )
        );
        User::create(
            array (
                'forename' => "Jamie",
                'surname' => "Berrisford",
                'email' => "jamieberrisford@gmail.com",
                'password' => Hash::make("Asdfgh12")
            )
        );
    }
}
