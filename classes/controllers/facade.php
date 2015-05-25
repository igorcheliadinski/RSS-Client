<?php

    require_once('remoteworker.php');
    require_once('../views/tape.php');

    $rss = $_POST['rss'];

    $worker = new RemoteWorker($rss);
    $response = $worker->getRSS();
    $tape = new Tape($response);
    $htmlTape = $tape->constructTape();

    echo $htmlTape;