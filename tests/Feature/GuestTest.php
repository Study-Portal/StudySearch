<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestTest extends TestCase
{
    public function test_guest_can_view_login()
    {
        $view = $this->get(route('login'));
        $view->assertOk();
    }

    public function test_guest_can_view_register()
    {
        $view = $this->get(route('register'));
        $view->assertOk();
    }

    public function test_guest_cant_view_dashboard()
    {
        $view = $this->get(route('dashboard'));
        $view->assertRedirect(route('login'));
    }

    public function test_guest_cant_view_create()
    {
        $view = $this->get(route('create'));
        $view->assertRedirect(route('login'));
    }

    public function test_guest_cant_view_search()
    {
        $view = $this->get(route('search'));
        $view->assertRedirect(route('login'));
    }

    public function test_guest_cant_view_saved()
    {
        $view = $this->get(route('saved'));
        $view->assertRedirect(route('login'));
    }
}
