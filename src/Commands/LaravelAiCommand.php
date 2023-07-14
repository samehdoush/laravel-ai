<?php

namespace LaravelAi\LaravelAi\Commands;

use Illuminate\Console\Command;

class LaravelAiCommand extends Command
{
    public $signature = 'laravel-ai';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
