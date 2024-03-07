<?php

namespace App\Console\Commands;

use Core\MainConstruction;
use Illuminate\Console\Command;
use Core\Materials\PlateMaterial;

class TestCore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-core';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $construction = new MainConstruction();
        dd($construction);
    }
}
