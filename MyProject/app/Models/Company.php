<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
    ];
    public function workers()
    {
        return $this->belongsToMany(Worker::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
