<?php

namespace App\Events;

use App\Asset;
use Illuminate\Queue\SerializesModels;

class ListEvent extends Event
{
    
    use SerializesModels;
    
    /**
     * 
     * Holds the Asset Model
     *
     * @var Asset
     */
    public $asset;
    
    /**
     *
     * @var int Current Role ID for the Logged in User
     */
    private $roleId;
    
    /**
     *
     * @var int Current User ID for the Logged in User
     */
    private $userId;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(int $userId, int $roleId, Asset $asset)
    {
        $this->asset    = $asset;
        $this->roleId   = $roleId;
        $this->userId   = $userId;
    }
    
    /**
     * 
     * Gets the Current Role ID for the logged in user
     * 
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->roleId;
    }
    
    /**
     * 
     * Gets the current user ID fro the logged in user
     * 
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }
}
