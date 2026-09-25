<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'last_name', 'email', 'job_title', 'hire_date', 'address', 'status', 'registered_by'])]
#[Hidden(['registered_by', 'status'])]
class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'id';

    public function projectEmployeeDetails()
    {
        return $this->hasMany(ProjectEmployeeDetail::class, 'employee_id');
    }

    public function projects()
    {
        return $this->hasMany(ProjectEmployeeDetail::class, 'employee_id');
    }

}