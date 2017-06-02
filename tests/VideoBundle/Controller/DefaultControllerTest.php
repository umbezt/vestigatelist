<?php

namespace VideoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/videos');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
