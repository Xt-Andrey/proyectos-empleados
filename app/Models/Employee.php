<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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
        'status',
        'registered_by',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (auth()->check() && empty($model->registered_by)) {
                $model->registered_by = auth()->id();
            }
        });
    }

    public function projectEmployeeDetails()
    {
        return $this->hasMany(ProjectEmployeeDetail::class, 'employee_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Projects::class, 'project_employee_details', 'employee_id', 'project_id')
            ->withPivot('project_role', 'assigned_hours', 'assignment_date')
            ->withTimestamps();
    }

    public function registeredBy()
    {
        return $this->belongsTo(User::class, 'registered_by');
    }
}