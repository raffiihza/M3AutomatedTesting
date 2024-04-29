<?php

namespace Tests\Browser;

use Illuminate\Auth\Events\Logout;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            
            ->type('email', 'User@gmail.com')
            ->type('password', 'password')
            ->press('Login')
            ->assertSee('Selamat Datang di praktikum Rancang Perangkat Lunak (RPL) tahun 2023')
            ->press('email')
            ->press("Logout")
            ->assertSee('Enterprise Application Development');




        });
    }
}
