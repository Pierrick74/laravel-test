<?php

namespace App\Console\Commands;

use App\Models\Shop;
use Illuminate\Console\Command;

class CleanDataBase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:clean-data-base';

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
        foreach (Shop::all() as $shop) {
            if($shop->updated_at < now()->subMinutes(1)&&($shop->status == "wait")){
                $shop -> delete();
            }
        }
    }
}
