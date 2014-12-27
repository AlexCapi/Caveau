<?php

class UserSeeder
    extends DatabaseSeeder
{
    public function run()
    {
        $users = [
            [
                "username" => "caveauquinard",
                "password" => Hash::make("caveauquinard0108"),
                "email"    => "alexandre.capellaro@gmail.com"
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}