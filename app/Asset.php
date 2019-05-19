<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use App\Group;

class Asset extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
    
    /**
     * 
     * To permit the editable fields
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * 
     * To hide these fields from being displayed to the consumer
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'group_id'];
    
    /**
     * 
     * To update the date and time automatically
     *
     * @var boolean
     */
    public $timestamps = true;
    
    /**
     * 
     * @return Gets the group that this asset belongs to
     */
    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
