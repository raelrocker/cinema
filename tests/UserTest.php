<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function test_create_user()
    {
        \App\User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt(123456)
        ]);

        $this->seeInDatabase('users', ['name' => 'Admin User']);
    }

}
