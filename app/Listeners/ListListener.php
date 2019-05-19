<?php

namespace App\Listeners;

use App\Events\ListEvent;
use App\Exceptions\RoleException;

class ListListener
{

    /**
     * Handle the event.
     *
     * @param  ListEvent  $event
     * @return void
     * @throws RoleException
     */
    public function handle(ListEvent $event)
    {
        if($event->getRoleId() === 1){ // 1 means that this is an admin user
            
            return $event->asset->all(); //returns all the assets for the admin user
            
        }elseif($event->getRoleId() === 2){ // 2 means that this is a normal user
            
            return $event->asset::whereHas('group')
                ->where('group_id', '=', \App\Group::whereHas('user')
                ->join('users', 'users.id', '=', 'groups.id')
                ->where('users.id', '=', $event->getUserId())
                ->get()[0]->group_id)
                ->get();
            
        }else{
            throw new RoleException('Invalid User Role');
        }
    }
}
