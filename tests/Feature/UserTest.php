<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function user()
    {
        $user = User::factory()->create();
        $this->assertModelExists($user);
        $this->actingAs($user);
        $this->assertAuthenticated();

        return $user->name;
    }

    public function test_user_redirects_from_home_page()
    {
        $this->user();
        $view = $this->get(route('home'));
        $view->assertRedirect(route('dashboard'));
    }

    public function test_user_can_view_dashboard()
    {
        $u = $this->user();
        $view = $this->get(route('dashboard'));
        $view->assertOk();
        $view->assertViewIs('dashboard');
        $view->assertSeeText($u);
    }
}
