<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kid extends Model
{
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function grade(): HasMany
    {
        return $this->HasMany(Grade::class);
    }
}
