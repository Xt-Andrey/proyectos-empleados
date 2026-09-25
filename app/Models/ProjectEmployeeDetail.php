<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEmployeeDetail extends Model
{
    use HasFactory;

    protected $table = 'project_employee_details';

    protected $fillable = [
        'employee_id',
        'project_id',
        'project_role',
        'assigned_hours',
        'assignment_date',
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

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id');
    }

    public function registeredBy()
    {
        return $this->belongsTo(User::class, 'registered_by');
    }
}