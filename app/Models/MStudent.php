<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

/**
 * @property int                $id
 * @property int                $created_by
 * @property int                $updated_by
 * @property int                $school_id
 * @property int                $person_id
 * @property string             $nis
 * @property string             $email
 * @property bool               $active
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property RelParentStudent[] $relParentStudents
 * @property User               $user
 * @property MSchool            $mSchool
 * @property User               $user
 * @property TPresence[]        $tPresences
 */
class MStudent extends HIModel
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_student';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_by', 'updated_by', 'school_id', 'person_id', 'nis', 'email', 'active', 'created_at', 'updated_at', 'deleted_at'];

    public function getData(int $id = null)
    {
        $result = DB::table($this->table, 'ms')
            ->select('ms.*', 'mpn.first_name', 'mpn.last_name', 'mpn.address', 'mpn.gender')
            ->join('m_person as mpn', 'mpn.id', '=', 'ms.person_id')
            ->whereNull(['ms.deleted_at', 'mpn.deleted_at'])
        ;

        if (null !== $id) {
            $result->where('ms.id', $id);
        }

        return $result;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relParentStudents()
    {
        return $this->hasMany('App\Models\RelParentStudent', 'student_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tPresences()
    {
        return $this->hasMany('App\Models\TPresence', 'student_id');
    }
}
