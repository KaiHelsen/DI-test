<?php
declare(strict_types=1);

class Logger
{
    public function LogToFile(string $message): void
    {
        if ($message !== '')
        {
            $logFile = fopen("log.info", 'a+b');
            fWrite($logFile, $message . PHP_EOL);
            return;
        }
    }
}