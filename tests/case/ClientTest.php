<?php
namespace Yassa\WoTBlitzAPI\Tests;

use GuzzleHttp\Client as HttpClient;
use Yassa\WoTBlitzAPI\Argument\Account\Info as AccountInfoArgument;
use Yassa\WoTBlitzAPI\Client;
use Yassa\WoTBlitzAPI\Method\Account\Info as AccountInfoMethod;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @vcr account_info-vcr.yml
     */
    public function testShouldReturnAccountInfo()
    {
        $client = new Client(new HttpClient(['base_url' =>Client::BASE_URI]));
        $client->setApplicationId('demo');

        $method = new AccountInfoMethod($client);

        $argument = new AccountInfoArgument();
        $argument->setAccountId(31100679);

        $result = $method->request($argument);

        $this->assertInternalType('array', $result);
        $this->assertArrayHasKey('status', $result);
    }
}
