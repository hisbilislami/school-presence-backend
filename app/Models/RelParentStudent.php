<?php

declare(strict_types=1);

namespace App\Models;

/**
 * @property int      $id
 * @property int      $parent_id
 * @property int      $student_id
 * @property int      $created_by
 * @property int      $updated_by
 * @property string   $created_at
 * @property string   $updated_at
 * @property string   $deleted_at
 * @property User     $user
 * @property MParent  $mParent
 * @property MStudent $mStudent
 * @property User     $user
 */
class RelParentStudent extends HIModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rel_parent_student';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'student_id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_at'];

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
    public function mParent()
    {
        return $this->belongsTo('App\Models\MParent', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mStudent()
    {
        return $this->belongsTo('App\Models\MStudent', 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userUpdatedBy()
    {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }
}
