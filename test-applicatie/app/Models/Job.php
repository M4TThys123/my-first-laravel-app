<?php

namespace App\Models;
use illuminate\support\Arr;


class Job {
    public static function all(): array
    {
        return [
            [   
                'id' => '1',
                'title' => 'Software Developer', 
                'hours' => '40'
            ],
            [
                'id' => '2',
                'title' => 'Frontend Designer & -Developer', 
                'hours' => '10'
            ],
            [
                'id' => '3',
                'title' => 'Freerunning Instructor', 
                'hours' => '2'
            ],
            [
                'id' => '4',
                'title' => 'Streamer & Content Creator', 
                'hours' => '30'
            ] 
        ];
    }

    public static function find(int $id): array
    {
         $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }
        return $job;
        }
    }