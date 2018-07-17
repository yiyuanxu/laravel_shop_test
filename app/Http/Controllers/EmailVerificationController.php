<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidRequestException;
use App\Notifications\EmailVerificationNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Mockery\Exception;

class EmailVerificationController extends Controller
{
    //
    public function verify(Request $request)
    {
        $email = $request->input('email');
        $token = $request->input('token');

        if (!$email || !$token){
            throw new Exception('连接不正确');
        }

        if ($token != Cache::get('email_verification_'.$email)) {
            throw  new InvalidRequestException('验证连接不正确或者已过期');
        }
        //??token 验证??

        if (!$user = User::where('email',$email)->first()){
            throw new InvalidRequestException('用户不存在');
        }

        Cache::forget('email_verification_'.$email);
        $user->update(['email_verified' => true]);
        return view('pages.success',['msg'=>'邮箱验证成功！']);
    }

    public function send(Request $request)
    {
        $user = $request->user();
        if ($user->email_verified){
            throw new InvalidRequestException('您已经验证过邮箱了');
        }
        $user->notify(new EmailVerificationNotification());

        return view('pages.success',['msg' => '邮件发送成功']);
    }
}
