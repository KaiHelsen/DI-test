<?php
declare(strict_types=1);

interface ITransform
{
    public function transform(string $input): string;

}