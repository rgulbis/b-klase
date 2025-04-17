<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    public function teacher(): BelongsTo
    {
        return $this->BelongsTo(Teacher::class);
    }

    public function kid(): BelongsTo
    {
        return $this->BelongsTo(Kid::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
