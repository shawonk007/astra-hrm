<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    public function department(): BelongsTo {
        return $this->belongsTo(Department::class);
    }

    public function designation(): BelongsTo {
        return $this->belongsTo(Designation::class);
    }
}
