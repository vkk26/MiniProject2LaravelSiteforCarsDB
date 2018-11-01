<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class ContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactForm()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('/about');
        $response->assertStatus(200);
    }
}