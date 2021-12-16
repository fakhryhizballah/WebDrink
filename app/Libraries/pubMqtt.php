<?php

namespace App\Libraries;

class pubMqtt
{
    // public function __construct()
    // {
    // }
    public function publish($topic, $pesan)
    {

        // $server   = 'ws.spairum.my.id';
        $server   = 'spairum.my.id';
        $port     = 1883;
        $clientId =  "WebServer-Client";
        $connectionSettings = (new \PhpMqtt\Client\ConnectionSettings)
            ->setUsername('mqttuntan')
            ->setPassword('mqttuntan');

        $mqtt = new \PhpMqtt\Client\MqttClient($server, $port, $clientId);
        $mqtt->connect($connectionSettings, true);
        $mqtt->publish($topic,  $pesan);
        $mqtt->disconnect();
    }
}
