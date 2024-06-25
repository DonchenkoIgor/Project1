<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'companyId',
        'workerId',
        'serviceId',
        'date',
        'time',
        'duration',
        'user_id',
    ];

    protected $attributes = [
        'companyId' => 1,
    ];

    public function worker()
    {
        return $this->belongsTo(Worker::class, 'workerId');
    }

    public function getWorkerNameAttribute()
    {
        return $this->worker ? $this->worker->name : 'N/A';
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getUserNameAttribute()
    {
        return $this->user ? $this->user->name : 'N/A';
    }

    public function service()
    {
       return $this->belongsTo(Service::class, 'serviceId');
    }

    public function getServiceNameAttribute()
    {
        return $this->service ? $this->service->name : 'N/A';
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
