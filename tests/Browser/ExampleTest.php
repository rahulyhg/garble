<?php

namespace Garble\Tests\Browser;

use Laravel\Dusk\Browser;
use Garble\Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testHomepageRendering()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Garble');
        });
    }
}
