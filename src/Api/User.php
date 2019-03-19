<?php

// +----------------------------------------------------------------------
// | ZKMALL
// +----------------------------------------------------------------------
// | Copyright (c) http://www.zhengkainet.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: ZKLIAOSHENGPING
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// | DESCRIBE:
// +----------------------------------------------------------------------


namespace JiaweiXS\WeApp\Api;


class User extends BaseApi
{
    public function getUserInfo($open_id){
        $url = ApiUrl::GET_USER_INFO;
        $param = array(
            'openid'=>$open_id,
        );
        return $this->sendRequestWithToken($url,$param);
    }
}