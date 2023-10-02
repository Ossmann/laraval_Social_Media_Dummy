<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'partner_id',
        'email',
        'description',
        'students_required',
        'year',
        'trimester',
        'image',
        // 'pdf',
    ];

    function partner() {
        return $this->belongsTo(Partner::class);
        }
}
