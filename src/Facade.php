<?php

declare(strict_types=1);

namespace Datomatic\LaravelThumbor;

use Datomatic\LaravelThumbor\Url\BuilderFactory;
use Datomatic\LaravelThumbor\Mocked\Url\BuilderFactory as FakeBuilderFactory;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        $url = config('thumbor.url');
        $key = config('thumbor.key');

        if ($url && $key) {
            return BuilderFactory::class;
        }
        return FakeBuilderFactory::class;
    }
}
