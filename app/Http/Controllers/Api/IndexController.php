<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2018/2/23
 * Time: 14:45
 */

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function index()
    {
        dd($this->request->user('api'));
    }
}