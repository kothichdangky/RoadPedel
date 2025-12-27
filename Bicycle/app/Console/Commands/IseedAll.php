<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class IseedAll extends Command
{
    protected $signature = 'iseed:all {--exclude=migrations}';
    protected $description = 'Generate seeders for all database tables using iSeed';

    public function handle()
    {
        $excluded = explode(',', $this->option('exclude'));

        $tables = DB::select('SHOW TABLES');
        $key = 'Tables_in_' . DB::getDatabaseName();
        $tableNames = array_map(fn($t) => $t->$key, $tables);

        $tableNames = array_filter($tableNames, fn($t) => !in_array($t, $excluded));

        if (empty($tableNames)) {
            $this->warn('No tables found for seeding.');
            return;
        }

        $this->info("Generating seeders for: " . implode(', ', $tableNames));

        Artisan::call('iseed', [
            'tables' => implode(',', $tableNames)
        ]);

        $this->info(Artisan::output());
    }
}
