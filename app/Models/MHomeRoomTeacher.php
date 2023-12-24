<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Facades\DB;

/**
 * @property int     $id
 * @property int     $class_id
 * @property int     $person_id
 * @property int     $created_by
 * @property int     $updated_by
 * @property string  $email
 * @property string  $mobile_phone_number
 * @property bool    $active
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $deleted_at
 * @property MClass  $mClass
 * @property MPerson $mPerson
 * @property User    $user
 * @property User    $user
 */
class MHomeRoomTeacher extends HIModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_homeroom_teacher';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['class_id', 'person_id', 'created_by', 'updated_by', 'email', 'mobile_phone_number', 'active', 'created_at', 'updated_at', 'deleted_at'];

    public function getData(int $id = null)
    {
        $result = DB::table($this->table, 'mhr')
            ->select('mhr.*', 'mc.name as class_name', 'mpn.first_name', 'mpn.last_name', 'mpn.address', 'mpn.gender')
            ->join('m_class as mc', 'mc.id', '=', 'mhr.class_id')
            ->join('m_person as mpn', 'mpn.id', '=', 'mhr.person_id')
            ->whereNull(['mhr.deleted_at', 'mc.deleted_at', 'mpn.deleted_at'])
        ;

        if (null !== $id) {
            $result->where('mhr.id', $id);
        }

        return $result;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mClass()
    {
        return $this->belongsTo('App\Models\MClass', 'class_id');
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
