<?php

namespace App\Console\Commands;

use App\Core\Contracts\Constructor\Direction;
use App\Core\Decorators\OneSidedDecorator;
use App\Core\Decorators\PlateDecorator;
use App\Core\Decorators\TextureDirectionDecorator;
use App\Core\Details\ConcreteDetail;
use Illuminate\Console\Command;

class DecorateDetail extends BaseCommand
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
        $detail = new OneSidedDecorator($detail);

        $detail->setId($this->uuid());
        $detail->setWidth(1500);
        $detail->setDirection(Direction::HORIZONTAL);
        $detail->setOneSided(true);
        $detail->setName('test');

        dd($detail);
    }
}
