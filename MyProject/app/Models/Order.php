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
    ];

    protected $attributes = [
        'companyId' => 1,
    ];

    public function worker()
    {
        return $this->belongsTo(Worker::class, 'workerId');
    }

    public function service()
    {
       return $this->belongsTo(Service::class, 'serviceId');
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}
