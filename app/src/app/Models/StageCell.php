<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageCell extends Model
{
    use HasFactory;

    protected $guarded = [
        "id",
    ];

    public function objects()
    {
        return $this->belongsTo(StageObject::class, 'object_id', 'id');
    }

}
