<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = config('tasks');
        foreach ($tasks as $task=>$description) {
            Task::create([
                'name' => $task,
                'description' => $description,
                "status"=>Arr::random(['stopped','started','completed']),
                "priority"=>Arr::random(['low','medium','top']),
            ]);
        }
        //
    }
}
