<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdate()
    {
        $users = User::all();
        $user = User::find(2);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertDatabaseHas('users', ["name" => 'Steve Smith']);
    }
}