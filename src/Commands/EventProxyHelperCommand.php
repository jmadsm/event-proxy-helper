<?php

namespace Jmadsm\EventProxyHelper\Commands;

use Illuminate\Console\Command;

class EventProxyHelperCommand extends Command
{
    public $signature = 'event-proxy-helper';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
