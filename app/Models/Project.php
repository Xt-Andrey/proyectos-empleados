<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'id_project',
        'project_name',
        'description',
        'start_date',
        'end_date',
        'budget',
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
        return $this->hasMany(ProjectEmployeeDetail::class, 'project_id');
    }

    public function employees()
    {
        return $this->belongsToMany(Employees::class, 'project_employee_details', 'project_id', 'employee_id')
            ->withPivot('project_role', 'assigned_hours', 'assignment_date')
            ->withTimestamps();
    }

    public function registeredBy()
    {
        return $this->belongsTo(User::class, 'registered_by');
    }
}