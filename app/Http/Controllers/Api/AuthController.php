<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2018/2/23
 * Time: 11:00
 */

namespace App\Http\Controllers\Api;


use App\Common\Log;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Services\AuthService;
use Illuminate\Http\Request;
use App\Common\ResponseApiJson;

class AuthController extends Controller
{
    use ResponseApiJson;


    protected $authService;


    public function __construct()
    {
        $this->authService = new AuthService(new User());
    }



    /**
     * 用户登陆
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function login( Request $request )
    {
        try {
            $json = $this->authService->doApiLogin($request->all());
            return $this->success($json,'登陆成功！');
        }catch ( \Exception $e )
        {
            Log::error($e);
            return $this->exception($e);
        }
    }


}