<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

/**
 * @property integer $id
 * @property integer $person_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $email
 * @property string $mobile_phone_number
 * @property boolean $active
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property RelParentStudent[] $relParentStudents
 * @property MPerson $mPerson
 * @property User $user
 * @property User $user
 */
class MParent extends HIModel
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'm_parent';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['person_id', 'created_by', 'updated_by', 'email', 'mobile_phone_number', 'active', 'created_at', 'updated_at', 'deleted_at'];

    public function getData(int $id = null)
    {
        $result = DB::table($this->table, 'mp')
            ->select('mp.*', 'mpn.first_name', 'mpn.last_name', 'mpn.address', 'mpn.gender')
            ->join('m_person as mpn', 'mpn.id', '=', 'mp.person_id')
            ->whereNull(['mp.deleted_at', 'mpn.deleted_at']);

        if (null !== $id) {
            $result->where('id', $id);
        }

        return $result;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relParentStudents()
    {
        return $this->hasMany('App\Models\RelParentStudent', 'parent_id');
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
}
