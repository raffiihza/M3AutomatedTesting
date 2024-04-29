<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Register
     */
    public function testExample(): void
    {
        $rand = random_int(10000000, 99999999);
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Enterprise Application Development')
                ->clickLink('Register')
                ->assertPathIs('/register')
                ->type('name', 'admin')
                ->type('email', 'admin@gmail.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('Register')
                ->assertPathIs('/home')
                ->assertSee('Selamat Datang di praktikum Rancang Perangkat Lunak (RPL) tahun 2023');
        });
    }
}
