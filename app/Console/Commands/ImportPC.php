<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class ImportPC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:pc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the .sql file of provinces and cities in DB';

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
        $done = DB::unprepared(file_get_contents('database/migrations/iran-cities.v1.1.ANSI.sql'));
        if ($done)
            $this->info('The Provinces and Cities imported to database successfully');
    }
}
