<?php

namespace Rector\Tests\Php73\Rector\FuncCall\JsonThrowOnErrorRector\Fixture;

final class DemoFile
{
    public function run(string $text)
    {
        return json_decode($text, flags: JSON_THROW_ON_ERROR);
    }
}
?>
