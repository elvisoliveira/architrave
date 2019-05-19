<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use App\Group;
use App\Role;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'group_id', 'role_id', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    
    /**
     * 
     * This is to update the created_at and updated_at automatically
     *
     * @var boolean
     */
    public $timestamp = true;
    
    /**
     * 
     * Gets the group that owns the user
     * 
     * @return mixed
     */
    public function groups()
    {
        return $this->belongsTo('App\Group');
    }
    
    /**
     * 
     * Get the role record associated with this user
     * 
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsTo('App\Role');
    }
    
}
