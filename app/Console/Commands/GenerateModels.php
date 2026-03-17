<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:models';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear modelos, factories y seeder a partir del fichero config resources.php';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $resources = config('resources');
        foreach ($resources as $resource=>$data) {
            if (isset($data['role']))
            continue;
            $model=Str::studly(Str::singular($resource));
            $this->call('make:model',
                ['name'=>$model,
                    '--migration'=>true,
                    '--factory'=>true,
                    '--seed'=>true
                ]);
//            php artisan make:model $resource -fms
        }
        //
    $this->info('Models generados');
    }
}
