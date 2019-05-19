<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use App\Asset;
use App\User;

class Group extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
    
    public $timestamps = true;
    
    /**
     * 
     * Get the users for this group
     * 
     * @return HasMany
     */
    public function user()
    {
        return $this->hasMany('App\User');
    }
    
    /**
     * 
     * Gets the assets for this group
     * 
     * @return HasMany
     */
    public function asset()
    {
        return $this->hasMany('App\Asset');
    }
    
}
