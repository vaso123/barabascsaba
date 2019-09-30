<?php

namespace App\Library;

class HtmlDecorate
{
    private $barmi;

    public function __construct    (Barmi $barmi) {
        $this->barmi = $barmi;
    }

    public function decorate($text)
    {
        die('decorating '.$text);
    }

}