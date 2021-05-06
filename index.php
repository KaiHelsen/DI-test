<?php
declare(strict_types=1);

include_once 'ITransform.php';
include_once 'Replacer.php';
include_once 'Capitalizer.php';
include_once 'Logger.php';

class Master
{
    private $logger;
    private $transformer;

    public function __construct(Logger $logger, ITransform $transformer)
    {
        $this->logger = $logger;
        $this->transformer = $transformer;
    }

    public function process(string $input): string
    {
        $this->logger->LogToFile($input);
        return $this->transformer->transform($input);
    }
}

$transformer = new Capitalizer();
if (isset($_POST['transform']))
{
    switch ($_POST['transform'])
    {
        case('cap'):
            break;
        case('repl'):
            $transformer = new replacer();
            break;
    }
}


$master = new Master(new Logger, $transformer);

var_dump($_POST);

$output = '';
if (isset($_POST['input']))
{
    $output = $master->process($_POST['input']);
}

require 'view.php';
