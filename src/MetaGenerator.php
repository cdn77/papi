<?php

declare (strict_types=1);

namespace PApi;

use Symfony\Component\Finder\Finder;

class MetaGenerator
{
    /** @var string[] */
    private $files;

    public function __construct()
    {
        $this->files = array_map(
            function (\SplFileInfo $file) {
                return $file->getPathname();
            },
            iterator_to_array(
                (new Finder())
                    ->in([
                        __DIR__ . '/Response',
                    ])
                    ->name('*.php')
                    ->notName('*Meta*')
                    ->notName('*Enum*')
                    ->notName('*Trait*')
                    ->notName('*Interface*')
                    ->files()
            )
        );
    }

    public function generate() : void
    {
        echo 'Started generating metas' . PHP_EOL;

        echo 'Found ' . count($this->files) . ' entities' . PHP_EOL;

        $spec = new PApiMetaSpec();
        if ($spec->processFiles($this->files)) {
            echo 'Finished generating metas' . PHP_EOL;
        } else {
            echo 'Generating metas ended with error' . PHP_EOL;
        }
    }
}
