<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubject extends Model
{
    protected $table = "user_subject";
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'subject_id'
    ];

    public function subjects() {
        return $this->belongsToMany(Subject::class);
    }
}
