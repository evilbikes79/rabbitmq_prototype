<?php

require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();


$channel->queue_declare('hello', false, true, false, false);

$msg = new AMQPMessage(json_encode([1,2,3]) ,array('delivery_mode' => 2) );
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();