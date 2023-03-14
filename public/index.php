<?php

define("INITIALIZATION_START", microtime(true) * 1000);
define("BASE_PATH", realpath(dirname(__DIR__)));
define("CONTEXT", "http");

require '../vendor/autoload.php';

$kernel = \Os\Framework\Kernel\Http\HttpKernel::build();
$kernel->render();
$kernel->done();
\Os\Framework\Debug\Dumper::dump(ENV);
\Os\Framework\Debug\Dumper::dd($kernel->getExecutionTime());