<?php declare(strict_types=1);

namespace Rubin\NameData;

class Loader
{
    public static function getNames(string $system, string $group, string $locale, string $vocabulary): array
    {
        $filename = implode(DIRECTORY_SEPARATOR, [__DIR__, ...func_get_args()]) . '.php';
        if (!file_exists($filename))
            throw new \InvalidArgumentException('Invalid vocabulary path');

        return require_once $filename;
    }
}
