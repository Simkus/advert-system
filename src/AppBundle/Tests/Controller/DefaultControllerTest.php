<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Controller\DefaultController;

class DefaultControllerTest extends WebTestCase
{

    public function testWords()
    {
    	$client = static::createClient();
        $client->request('GET', '/home');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testApiForm()
    {
    	$this->assertEquals(1, 1);
    }

}
