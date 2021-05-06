<?php
declare(strict_types=1);

require_once 'ITransform.php';


class replacer implements ITransform
{
    public function transform(string $input): string
    {
        if($input !== '')
        {
            return $this->convert($input);
        }
        return $input;
    }

    public function convert(string $text, string $separator = ' ', string $merger = '-'): string
    {
        $splitString = explode($separator, $text);
        $result = implode($merger, $splitString);
        echo $result;
        return $result;
    }
}