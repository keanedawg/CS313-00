<?php

  use Monolog\Logger;
  use Monolog\Handler\StreamHandler;

  print "Hello World! This is php";
  // create a log channel
  $log = new Logger('name');
  $log->pushHandler(new StreamHandler('logfile.txt', Logger::WARNING));

  // add records to the log
  $log->warning('Foo');
  $log->error('Bar');
?>