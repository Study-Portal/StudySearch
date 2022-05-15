<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_user_redirects_from_home_page()
    {
        $user = User::factory()->create();
        $this->assertModelExists($user);
        $this->actingAs($user);
        $this->assertAuthenticated();
        $view = $this->get(route('home'));
        $view->assertRedirect(route('dashboard'));
    }
}
