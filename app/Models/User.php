<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int                $id
 * @property int                $created_by
 * @property int                $updated_by
 * @property string             $username
 * @property string             $email
 * @property string             $email_verified_at
 * @property string             $password
 * @property string             $type
 * @property bool               $active
 * @property string             $remember_token
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property MClass[]           $mClasses
 * @property MClass[]           $mClasses
 * @property RelPersonUser[]    $relPersonUsers
 * @property RelPersonUser[]    $relPersonUsers
 * @property RelPersonUser[]    $relPersonUsers
 * @property RelParentStudent[] $relParentStudents
 * @property RelParentStudent[] $relParentStudents
 * @property MStudent[]         $mStudents
 * @property MStudent[]         $mStudents
 * @property MPerson[]          $mPeople
 * @property MPerson[]          $mPeople
 * @property TPresenceDetail[]  $tPresenceDetails
 * @property TPresenceDetail[]  $tPresenceDetails
 * @property TPresence[]        $tPresences
 * @property TPresence[]        $tPresences
 * @property MConfig[]          $mConfigs
 * @property MConfig[]          $mConfigs
 * @property MSchool[]          $mSchools
 * @property MSchool[]          $mSchools
 * @property User               $user
 * @property User               $user
 * @property MParent[]          $mParents
 * @property MParent[]          $mParents
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_by', 'updated_by', 'username', 'email', 'email_verified_at', 'password', 'type', 'active', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mHomeroomTeachersCreatedBy()
    {
        return $this->hasMany('App\Models\MHomeroomTeacher', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mHomeroomTeachersUpdatedBy()
    {
        return $this->hasMany('App\Models\MHomeroomTeacher', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mClassesCreatedBy()
    {
        return $this->hasMany('App\Models\MClass', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mClassesUpdatedBy()
    {
        return $this->hasMany('App\Models\MClass', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relPersonUsersCreatedBy()
    {
        return $this->hasMany('App\Models\RelPersonUser', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relPersonUsersUpdatedBy()
    {
        return $this->hasMany('App\Models\RelPersonUser', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relPersonUsers()
    {
        return $this->hasMany('App\Models\RelPersonUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relParentStudentsCreatedBy()
    {
        return $this->hasMany('App\Models\RelParentStudent', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relParentStudentsUpdatedBy()
    {
        return $this->hasMany('App\Models\RelParentStudent', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mStudentsCreatedBy()
    {
        return $this->hasMany('App\Models\MStudent', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mStudentsUpdatedBy()
    {
        return $this->hasMany('App\Models\MStudent', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mPeopleCreatedBy()
    {
        return $this->hasMany('App\Models\MPerson', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mPeopleUpdatedBy()
    {
        return $this->hasMany('App\Models\MPerson', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tPresenceDetailsCreatedBy()
    {
        return $this->hasMany('App\Models\TPresenceDetail', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tPresenceDetailsUpadatedBy()
    {
        return $this->hasMany('App\Models\TPresenceDetail', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tPresencesCreatedBy()
    {
        return $this->hasMany('App\Models\TPresence', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tPresencesUpdatedBy()
    {
        return $this->hasMany('App\Models\TPresence', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mConfigsCreatedBy()
    {
        return $this->hasMany('App\Models\MConfig', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mConfigsUpdatedBy()
    {
        return $this->hasMany('App\Models\MConfig', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mSchoolsCreatedBy()
    {
        return $this->hasMany('App\Models\MSchool', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mSchoolsUpdatedBy()
    {
        return $this->hasMany('App\Models\MSchool', 'updated_by');
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
    public function mParentsCreatedBy()
    {
        return $this->hasMany('App\Models\MParent', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mParentsUpdatedBy()
    {
        return $this->hasMany('App\Models\MParent', 'updated_by');
    }
}
