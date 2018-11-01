<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UserCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCount()
    {
        $users = User::all();
        $users->count();
        $this->assertEquals(21, count($users));      //current number of users is to be updated everytime//
    }
}