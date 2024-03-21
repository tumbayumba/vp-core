<?php

namespace App\Console\Commands;

use App\Core\Decorators\PlateDecorator;
use App\Core\Decorators\TextureDirectionDecorator;
use App\Core\Details\ConcreteDetail;
use App\Core\Operations\Hole;
use Core\ConcreteConstruction;
use Faker\Core\Uuid;
use Illuminate\Console\Command;
use Core\Materials\PlateMaterial;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $kitchen = new ConcreteConstruction();
        $kitchen->setId($this->uuid())->setName('Kitchen');

        $stand1 = new ConcreteConstruction();
        $stand1->setId($this->uuid())->setName('Stand_1');
        $stand2 = new ConcreteConstruction();
        $stand2->setId($this->uuid())->setName('Stand_2');

        // Detail creation
        $stand1Detail1 = new ConcreteDetail();
        //$stand1Detail1 = new PlateDecorator($stand1Detail1);
        //$stand1Detail1 = new TextureDirectionDecorator($stand1Detail1);

        $stand1Detail1->setId($this->uuid())->setName('Facade stand_1 detail with handle');
        $holeForHandle1 = new Hole([
            'cx' => 50,
            'cy' => 100,
            'z' => 10,
            'r' => 3,
        ]);
        $holeForHandle2 = new Hole([
            'cx' => 50,
            'cy' => 200,
            'z' => 10,
            'r' => 3,
        ]);
        $stand1Detail1->attach($holeForHandle1)
                      ->attach($holeForHandle2);
        $stand1->attach($stand1Detail1);

        $countertop = new ConcreteConstruction();
        $countertop->setId($this->uuid())->setName('Countertop');

        $countertopDetail1 = new ConcreteDetail();
        $countertopDetail1->setId($this->uuid())->setName('Main countertop detail');
        $countertopDetail2 = new ConcreteDetail();
        $countertopDetail2->setId($this->uuid())->setName('Detail with cutout for sink');

        $countertop->attach($countertopDetail1)
                   ->attach($countertopDetail2);

        // Throw a piece of plate on the floor
        $pieceOfPlate = new ConcreteDetail();
        $pieceOfPlate->setId($this->uuid())->setName('A piece of wood plate underfoot');

        $kitchen->attach($stand1)
                ->attach($stand2)
                ->attach($countertop)
                ->attach($pieceOfPlate);

        //$kitchen->detach($stand2);
        dd($kitchen);
    }

    protected function uuid()
    {
        return Str::uuid()->toString();
    }
}
