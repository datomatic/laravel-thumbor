<?php

declare(strict_types=1);

namespace Datomatic\LaravelThumbor\Mocked\Url;

class BuilderFactory
{
    public static function construct()
    {
        return new self;
    }

    public function url($original)
    {
        return Builder::construct($original);
    }
}
