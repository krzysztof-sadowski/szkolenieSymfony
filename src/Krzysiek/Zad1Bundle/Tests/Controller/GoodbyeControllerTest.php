<?php

namespace Krzysiek\Zad1Bundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GoodbyeControllerTest extends WebTestCase
{
    public function testGoodbye()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/goodbye');
    }

}
