<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\currenci;
use AmrShawky\LaravelCurrency\Facade\Currency;

class currencyupdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currencyupdate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

$value = Currency::rates()
->latest()
->symbols(['EUR'])
->base('usd')
->get();

        currenci::create([
            'valeur' => $value['EUR']
        ]);
    }
}
