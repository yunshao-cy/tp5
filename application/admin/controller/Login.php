<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\captcha\Captcha;

class Login extends Controller
{
    public function login ()
    {
    	return $this->fetch();
    }

    public function loginHandle (Request $request)
    {
    	$code = $request->param('code');
    	$captcha = new Captcha();
    	$res = $captcha->check($code);
    }

    public function captcha ()
    {
    	$config = [
    		'imageW' => '170',
    		'imageH' => '40',
    		'fontSize' => '20'
    	];
    	$captcha = new Captcha($config);
		return $captcha->entry();
    }
}
