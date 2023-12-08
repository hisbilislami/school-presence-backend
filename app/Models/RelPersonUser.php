<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int     $id
 * @property int     $person_id
 * @property int     $user_id
 * @property int     $school_id
 * @property int     $created_by
 * @property int     $updated_by
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $deleted_at
 * @property User    $user
 * @property MPerson $mPerson
 * @property MSchool $mSchool
 * @property User    $user
 * @property User    $user
 */
class RelPersonUser extends HIModel
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rel_person_user';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['person_id', 'user_id', 'school_id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_at'];

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
    public function mPerson()
    {
        return $this->belongsTo('App\Models\MPerson', 'person_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
