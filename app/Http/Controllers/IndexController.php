<?php

namespace App\Http\Controllers;

use App\Common\Redis;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $name = 'http://www.baidu.com';
        Mail::send('emails.test',['name'=>$name],function($message){
            $to = '1697184654@qq.com';
            $message ->to($to)->subject('测试邮件');
        });
    }
}
