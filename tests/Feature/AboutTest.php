<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{
    /**
     * Tests if the About Page contains the text "About Page"
     */
    public function test_page_contains_about_page() {
        $this->get(url("about"))->assertSee("About Page");
    }
}
