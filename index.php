<?php

require __DIR__ . '/vendor/autoload.php';

use Zoo\Classes\Animals\Elephant;
use Zoo\Classes\Animals\Fox;
use Zoo\Classes\Animals\Rabbit;
use Zoo\Classes\Animals\Rhino;
use Zoo\Classes\Animals\SnowLeopard;
use Zoo\Classes\Animals\Tiger;

$tigger = new Tiger('Tigger');
echo PHP_EOL . $tigger . PHP_EOL;
$tigger->feeding();
$tigger->combing();

$dambo = new Elephant('Dambo');
echo PHP_EOL . $dambo . PHP_EOL;
$dambo->feeding();

$rogatek = new Rhino('Rogatek');
echo PHP_EOL . $rogatek . PHP_EOL;
$rogatek->feeding();

$chytrusek = new Fox('Chytrusek');
echo PHP_EOL . $chytrusek . PHP_EOL;
$chytrusek->feeding();
$chytrusek->combing();

$leon = new SnowLeopard('Leon');
echo PHP_EOL . $leon . PHP_EOL;
$leon->feeding();
$leon->combing();

$bugs = new Rabbit('Bugs');
echo PHP_EOL . $bugs . PHP_EOL;
$bugs->feeding();
$bugs->combing();