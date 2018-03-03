<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2018/2/23
 * Time: 16:52
 */

namespace App\Common;

use Illuminate\Support\Facades\Redis as RedisFacade;
use Illuminate\Redis\Connections\PhpRedisConnection;


class Redis extends PhpRedisConnection
{


}