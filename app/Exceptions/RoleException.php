<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Exceptions;

/**
 * Description of RoleException
 * 
 * This will be raised when the role of the logged in user is not recognized
 *
 * @author mostafa
 */
class RoleException extends \Exception {
    
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL): \Exception {
        parent::__construct($message, $code, $previous);
    }
    
}
