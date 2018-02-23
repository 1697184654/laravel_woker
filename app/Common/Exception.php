<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2018/2/23
 * Time: 14:14
 */

namespace App\Common;


use Throwable;

class Exception extends \Exception
{
    public function __construct( $message = "", $code = 0, Throwable $previous = null)
    {
        if ( !is_string($message) )
        {
            $message = json_encode($message);
        }
        parent::__construct($message, $code, $previous);
    }
}