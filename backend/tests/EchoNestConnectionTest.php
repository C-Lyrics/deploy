<?php

require_once 'EchoNest.php';

class EchoNestConnectionTest extends PHPUnit_Framework_TestCase {
    public function testQueryArtist() {
        $connection = new EchoNestConnection();
        $results = $connection->queryArtist('Capital Cities');

        $this->assertNotEmpty($results);
    }

    public function testGetApiKey() {
        $connection = new EchoNestConnection();
        $api = $connection->getApiKey();
        $this->assertNotEmpty($api);
    }

    public function testGetClient() {
        $connection = new EchoNestConnection();
        $client = $connection->getClient();
        $this->assertNotEmpty($client);
    }

    public function testGetArtistApi() {
        $connection = new EchoNestConnection();
        $artistApi = $connection->getArtistApi();
        $this->assertNotEmpty($artistApi);
    }

    public function testGetSongApi() {
        $connection = new EchoNestConnection();
        $songApi = $connection->getSongApi();
        $this->assertNotEmpty($songApi);
    }
}