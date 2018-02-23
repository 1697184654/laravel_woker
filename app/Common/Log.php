<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2018/2/23
 * Time: 11:51
 */

namespace App\Common;

use Illuminate\Support\Facades\Log as Logs;


class Log
{
    public static function debug( $data ,$title = '')
    {
        Logs::debug(' ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓     START   '.$title.'         ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓');
        Logs::debug($data);
        Logs::debug(' ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑     END     '.$title.'         ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑');
    }

    public static function error( $data ,$title = '')
    {
        Logs::error(' ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓     START   '.$title.'         ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓');
        Logs::error($data);
        Logs::error(' ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑     END     '.$title.'         ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑');
    }

    public static function info( $data , $title = '')
    {
        Logs::info(' ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓     START   '.$title.'         ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓');
        Logs::info($data);
        Logs::info(' ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑     END     '.$title.'         ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑');
    }
}