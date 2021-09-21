<?php

namespace App;

class Bar
{
    public function arrayMethod(): void
    {
        $array = [];

        $array[] = 10;
        $array[][] = 10;
        $array[];
        var_dump($array[]);
    }
}
