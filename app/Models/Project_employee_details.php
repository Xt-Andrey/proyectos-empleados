<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_employee_details extends Model
{
    use HasFactory;

    protected $table = 'project_employee_details';

    protected $fillable = [
        'employee_id',
        'project_id',
        'project_role',
        'assigned_hours',
        'assignment_date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id');
    }
}