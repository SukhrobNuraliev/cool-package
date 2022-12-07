<?php

namespace Sukhrob\CoolPackage\Commands;

use Illuminate\Console\Command;

class CoolPackageCommand extends Command
{
    public $signature = 'cool-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
