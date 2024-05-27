<?php

namespace Midhun\GitConsole\Commands;

use Illuminate\Console\Command;

class GitConsoleCommand extends Command
{
    public $signature = 'git';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
