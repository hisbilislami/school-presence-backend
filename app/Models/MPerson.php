<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int                $id
 * @property int                $created_by
 * @property int                $updated_by
 * @property string             $first_name
 * @property string             $last_name
 * @property string             $address
 * @property string             $gender
 * @property bool               $active
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property RelPersonUser[]    $relPersonUsers
 * @property User               $user
 * @property User               $user
 * @property MParent[]          $mParents
 */
class MPerson extends HIModel
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_person';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_by', 'updated_by', 'first_name', 'last_name', 'address', 'gender', 'active', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mHomeroomTeachers()
    {
        return $this->hasMany('App\Models\MHomeroomTeacher', 'person_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relPersonUsers()
    {
        return $this->hasMany('App\Models\RelPersonUser', 'person_id');
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
    public function userUpdatedBy()
    {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mParents()
    {
        return $this->hasMany('App\Models\MParent', 'person_id');
    }
}
