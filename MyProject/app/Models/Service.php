<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'duration',
    ];

    public function workers()
    {
        return $this->belongsToMany(Worker::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
