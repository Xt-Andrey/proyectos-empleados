<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['employee_id', 'project_id', 'project_role', 'assigned_hours', 'assignment_date', 'registered_by'])]
#[Hidden(['registered_by'])]
class ProjectEmployeeDetail extends Model
{
    use HasFactory;
    protected $table = 'project_employee_details';
    protected $primaryKey = 'id';
        public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}


