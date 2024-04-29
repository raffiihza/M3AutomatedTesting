<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreatePostTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')


                ->type('email', 'jamet@gmail.com')
                ->type('password', 'jamet12345')
                ->press('Login')
                ->assertSee('Selamat Datang di praktikum Rancang Perangkat Lunak (RPL) tahun 2023');

            $browser->visit('/post')
                ->assertSee('All Posts from ead laboratory')
                ->press('Create new post')
                ->assertPathIs('/post/create')
                ->type('title', 'Hihihihi')
                ->type('description', 'Awokwokwkwokowkowkokw')
                ->press('Create')
                ->assertPathIs('/post');
        });
    }
}
