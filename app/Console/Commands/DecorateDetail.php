<?php

namespace App\Console\Commands;

use App\Core\Contracts\Constructor\Direction;
use App\Core\Decorators\PlateDecorator;
use App\Core\Decorators\TextureDirectionDecorator;
use App\Core\Details\ConcreteDetail;
use Illuminate\Console\Command;

class DecorateDetail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:decorate-detail';

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
        $detail = new ConcreteDetail();
        $detail = new PlateDecorator($detail);
        $detail = new TextureDirectionDecorator($detail);

        //$detail->setId(time());
        //$detail->setWidth(1500);
        //$detail->setDirection(Direction::HORIZONTAL);

        dd($detail->getWidth());
    }
}
