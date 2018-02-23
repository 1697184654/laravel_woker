<?php
/**
 * 认证服务
 * User: Dave
 * Date: 2018/2/23
 * Time: 10:58
 */

namespace App\Services;


use App\Common\Exception;
use App\Common\Log;
use App\Model\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class AuthService extends BaseService
{

    protected $user;

    const ERROR_CODE_PREFIX        =    90000;

    public function __construct( User $user )
    {
        $this->user = $user;
    }

    /**
     * 判断当前角色是否认证通过
     * @param Request $request
     * @param string $guard
     * @return bool
     */
    public static function isAuthenticated( Request $request , string $guard = 'api' )
    {
        if ( !$request->user($guard) )
            return false;
        return true;
    }


    public function doApiLogin( array $data )
    {
        $username = $data['username']??'';
        $password = $data['password']??'';

        $this->user = $this->user->where('name',$username)->first();
        if ( !$this->user )
            throw new Exception('用户名不存在！', self::ERROR_CODE_PREFIX . '404');
        if ( !password_verify( $password,$this->user->password ) )
            throw new Exception('密码错误!',self::ERROR_CODE_PREFIX.'401');


        try {

            $http = new Client();

            $response = $http->post(request()->root() . '/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => env('OAUTH_API_CLIENT_ID',''),
                    'client_secret' => env('OAUTH_API_CLIENT_SECRET',''),
                    'username' => $username,
                    'password' => $password,
                    'scope' => '',
                ],
            ]);

            return json_decode((string) $response->getBody(), true);

        }catch ( RequestException $exception )
        {
            Log::error($exception);
            throw new Exception('网络异常！',self::ERROR_CODE_PREFIX.'000');
        }

    }

}