<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'worker_service');
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'workerId');
    }
}
