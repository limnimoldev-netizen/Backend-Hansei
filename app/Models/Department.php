<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Department extends Model
{
   protected $table = 'attendances';

    protected $primaryKey = 'id';

    protected $fillable = [
        
        'name'
    ];

    public function department(): HasMany
    {
        return $this->HasMany(Attendance::class);
    }
}
