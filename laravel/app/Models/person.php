<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    public function relatedTable()
    {
        return $this->belongsTo(RelatedTable::class);
    }
}



