<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MakePostTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')


                ->type('email', 'bebas@gmail.com')
                ->type('password', 'bebas12345')
                ->press('Login')
                ->assertSee('Selamat Datang di praktikum Rancang Perangkat Lunak (RPL) tahun 2023');
        });
    }
}
