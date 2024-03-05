<?php

namespace App\Models;

use App\Helpers\ProjectsStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','status','user_id','project_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function getStatus():string
    {
        return match ($this->status) {
            ProjectsStatus::PROGRESS->value => "<span class='text-gray-600 font-bold'>Progress</span>",
            ProjectsStatus::DONE->value => "<span class='text-green-600 font-bold'>Done</span>",
            ProjectsStatus::CANCELED->value => "<span class='text-red-600 font-bold'>Canceld</span>",
            default => "<span class='text-red-600 font-bold'>Why you play in database!?</span>"
        };
    }
}
