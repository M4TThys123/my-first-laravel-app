<?php

namespace App\Models;


use illuminate\support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model {
    use HasFactory;

    protected $table = 'jobs_listings';
 
    // protected $fillable = [ 'employer_id', 'title', 'hours', 'salary' ];

    protected $guarded = [];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }
} 