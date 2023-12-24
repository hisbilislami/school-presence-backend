<?php

declare(strict_types=1);

namespace App\Models;

// use App\\Models\\HIModel;
use Illuminate\Support\Facades\DB;

/**
 * @property int             $id
 * @property int             $created_by
 * @property int             $updated_by
 * @property string          $name
 * @property string          $address
 * @property string          $phone_number
 * @property bool            $active
 * @property string          $deleted_at
 * @property string          $created_at
 * @property string          $updated_at
 * @property MConfig[]       $mConfigs
 * @property RelPersonUser[] $relPersonUsers
 * @property MStudent[]      $mStudents
 * @property MClass[]        $mClasses
 * @property User            $user
 * @property User            $user
 */
class MSchool extends HIModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_school';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_by', 'updated_by', 'name', 'address', 'phone_number', 'active', 'deleted_at', 'created_at', 'updated_at'];

    public function getData(int $id = null)
    {
        $result = DB::table($this->table)->select('*')->whereNull('deleted_at');
        if (null !== $id) {
            $result->where('id', $id);
        }

        return $result;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mConfigs()
    {
        return $this->hasMany('App\Models\MConfig', 'school_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relPersonUsers()
    {
        return $this->hasMany('App\Models\RelPersonUser', 'school_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mStudents()
    {
        return $this->hasMany('App\Models\MStudent', 'school_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mClasses()
    {
        return $this->hasMany('App\Models\MClass', 'school_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userCreatedBy()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    public function userUpdatedBy()
    {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }
}
