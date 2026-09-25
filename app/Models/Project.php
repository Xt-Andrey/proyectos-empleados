<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['id_project', 'project_name', 'description', 'start_date', 'end_date', 'budget', 'status', 'registered_by'])]
#[Hidden(['registered_by', 'status'])]
class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';

    public function projectEmployeeDetails()
    {
        return $this->hasMany(ProjectEmployeeDetail::class, 'project_id');
    }
}

