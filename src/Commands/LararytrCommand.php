<?php

namespace Rakhasa\Lararytr\Commands;

use Illuminate\Console\Command;

class LararytrCommand extends Command
{
    public $signature = 'lararytr';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
