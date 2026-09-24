<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'job_title',
        'hire_date',
        'address',
    ];

    public function projectEmployeeDetails()
    {
        return $this->hasMany(Project_employee_details::class, 'employee_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Projects::class, 'project_employee_details', 'employee_id', 'project_id')
                    ->withPivot('project_role', 'assigned_hours', 'assignment_date')
                    ->withTimestamps();
    }
}