<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndiaPinode extends Model
{
    public $table = 'india_pinode';

    protected $fillable = [
        'india_pinode',
        'pincode',
        'officeType',
        'deliverystatus',
        'divisionname',
        'regionname',
        'circlename',
        'taluk',
        'districtname',
        'statename',
        'created_at',
        'updated_at'
    ];

}