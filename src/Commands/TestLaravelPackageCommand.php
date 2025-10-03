<?php

namespace jebraili\TestLaravelPackage\Commands;

use Illuminate\Console\Command;

class TestLaravelPackageCommand extends Command
{
    public $signature = 'test-laravel-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
