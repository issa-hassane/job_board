<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Jobs{
    public static function all():array{
        return [
            [
                'id'=> 1,
                'title'=>'Software dev',
                'salary'=>"$4000"
            ],
            [
                'id'=> 2,
                'title'=>'ML dev',
                'salary'=>"$5000"
            ]
        ];
    }
    public static function find(int $id){
        $job = Arr::first(static::all(),fn($job) => $job['id'] == $id);
        if(! $job){
            abort(404);
        }
        return $job;
    }
}


?>