<?php
/**
 * Created by PhpStorm.
 * User: grey
 * Date: 10/11/2018
 * Time: 1:54 PM
 */

require  __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Command\ReadFile;




$application = new Application();

$application->add( new ReadFile());





$application->run();






