<?php
require_once __DIR__.'/../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$output = $bessie->say();
echo $output;
