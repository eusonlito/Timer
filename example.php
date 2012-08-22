<?php
include (__DIR__.'/libs/ANS/Timer/Timer.php');

$Timer = new \ANS\Timer\Timer;

$Timer->mark('Starting a mark previous to operations');

foreach ($alotofoperations as $operation) {
    $Timer->mark('Start operation '.$operation->name);

    $operation->function();

    $Timer->mark('End operation '.$operation->name);
}

$Timer->mark('Ended a mark previous to operations');

foreach ($Timer->get() as $timer) {
    echo "\n".sprintf('%01.6f', $timer['total']).' - '.$timer['text'];
}

echo "\n".$Timer->getMemoryUsage();
