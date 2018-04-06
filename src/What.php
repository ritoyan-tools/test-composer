<?php
namespace Ritoyan;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class What {
    public function a() {
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('/tmp/to-your.log', Logger::WARNING));

        // add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    }
}
