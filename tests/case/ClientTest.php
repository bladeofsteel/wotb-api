<?php
namespace Yassa\WoTBlitzAPI\Tests;

use GuzzleHttp\Client as HttpClient;
use Yassa\WoTBlitzAPI\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @vcr account_info-vcr.yml
     */
    public function testShouldReturnAccountInfo()
    {
        $client = new Client('demo', new HttpClient(['base_url' =>Client::BASE_URI]));
        $result = $client->accountInfo(31100679);
        $this->assertInternalType('array', $result);
        $this->assertArrayHasKey('status', $result);
    }
}
