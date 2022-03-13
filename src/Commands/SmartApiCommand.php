<?php

namespace SmartApi\Commands;

use Illuminate\Console\Command;

class SmartApiCommand extends Command
{
    public $signature = 'smart-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
