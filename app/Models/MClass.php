<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

/**
 * @property int                $id
 * @property int                $school_id
 * @property int                $created_by
 * @property int                $updated_by
 * @property string             $code
 * @property string             $name
 * @property bool               $active
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property User               $user
 * @property MSchool            $mSchool
 * @property User               $user
 */
class MClass extends HIModel
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_class';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['school_id', 'created_by', 'updated_by', 'code', 'name', 'active', 'created_at', 'updated_at', 'deleted_at'];

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
    public function mHomeroomTeachers()
    {
        return $this->hasMany('App\Models\MHomeroomTeacher', 'class_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userCreatedBy()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mSchool()
    {
        return $this->belongsTo('App\Models\MSchool', 'school_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userUpdatedBy()
    {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }
}
