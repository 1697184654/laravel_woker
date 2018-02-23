<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2018/2/23
 * Time: 14:34
 */

namespace App\Common;


trait ResponseApiJson
{

    public function fail( $data=[] , $code = '500', $msg = '操作失败！' )
    {
        return $this->toJson([
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ]);
    }

    public function exception( \Exception $e )
    {
        return $this->toJson([
            'code' => $e->getCode(),
            'msg' => $e->getMessage(),
            'data' => ''
        ]);
    }

    public function success( $data=[] , $msg = '操作成功！' )
    {
        return $this->toJson([
            'code' => 0,
            'msg' => $msg,
            'data' => $data
        ]);
    }


    private function toJson( $data )
    {
        return response()->json($data);
    }
}