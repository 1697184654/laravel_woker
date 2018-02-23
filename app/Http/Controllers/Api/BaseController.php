<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2018/2/23
 * Time: 11:00
 */

namespace App\Http\Controllers\Api;


use App\Common\ResponseApiJson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    use ResponseApiJson;

    protected $request;

    public function __construct( Request $request )
    {
        $this->request = $request;
        $this->middleware('auth.api');
    }

}