<?php

declare (strict_types=1);

namespace PApi;

use Skrz\Meta\ConstantsModule;
use Skrz\Meta\JSON\JsonModule;
use Skrz\Meta\MetaSpec;
use Skrz\Meta\PHP\DateTimeFormattingSerializer;
use Skrz\Meta\PHP\PhpModule;

class PApiMetaSpec extends MetaSpec
{
    protected function configure() : void
    {
        $phpModule = new PhpModule();
        $constantsModule = new ConstantsModule();
        $jsonModule = new JsonModule();

        $phpModule->addPropertySerializer(new DateTimeFormattingSerializer(
            'Y-m-d\TH:i:s.uP',
            \DateTimeImmutable::class,
            '0001-01-01T00:00:00Z'
        ));

        //Match the namespaces class to generate meta
        $this->match('PApi\Response\*')
            ->addModule($phpModule)
            ->addModule($constantsModule)
            ->addModule($jsonModule);
    }
}
