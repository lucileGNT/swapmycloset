<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventControllerTest extends WebTestCase
{
    public function testListevents()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listEvents');
    }

    public function testCreateevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createEvent');
    }

    public function testShowevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showEvent');
    }

}
