<?php

class HomeTest extends TestCase
{
    /**
     * Test the homepage.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/');
    }
}
