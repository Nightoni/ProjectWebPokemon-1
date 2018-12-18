<?php

namespace App\Console\Commands;

use App\Models\Block;
use Illuminate\Console\Command;
use Pokemon\Pokemon;

class BlocksPokemon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blocks:pokemon';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Recuperation des blocks Pokemon';

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
     * @return mixed
     */
    public function handle()
    {
       $sets = Pokemon::Set()->all();
       foreach($sets as $set) {
           if (!Block::where('univers', 'Pokemon')->where('name', $set->getSeries() )->exists()) {
              $bloc = new Block();
              $bloc->name = $set->getSeries();
              $bloc->univers = 'Pokemon';
              $bloc->save();
           }
       }
    }
}
