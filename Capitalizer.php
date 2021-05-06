<?php
declare(strict_types=1);

class Capitalizer implements ITransform
{

    public function transform(string $input): string
    {
        if ($input !== '')
        {
            return $this->Capitalize($input);
        }
        return $input;
    }

    public function Capitalize(string $input): string
    {
        $characters = str_split($input);
        $output = array();
        foreach ($characters as $key => $char)
        {
            if ($key % 2 !== 0)
            {
                $char = strtoupper($char);

            }
            $output[$key] = $char;
        }
        return implode($output);
    }
}