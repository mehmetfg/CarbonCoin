<?php

namespace App\Console\Commands;

use App\Services\ExchangeReportService;
use Illuminate\Console\Command;

class ExchangeReportCommend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchange:report';

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
    protected  $exchange;

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
        $report= new ExchangeReportService();
        $report->clientExchange();
        echo "bbaşarılı";
    }
}
