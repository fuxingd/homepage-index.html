<?php
namespace app\index\controller;
use app\common\service\UserService;
use think\Request;

class UserController
{
    // public function index()
    // {
    //     $User =new User;
    //     $teachers = $User -> select();
    //     $teacher = $teachers[0];
    //     var_dump($teacher -> getData('name'));
    // }
    // public function insert()
    // {
    //     $User = new User;
    //     $User -> id = '3';
    //     $User -> name = 'hello';
    //     $User -> password = '222';
    //     $User -> save();
    //     return $User -> name ;
    // }

    public function showUser()
    {
        $userService = new UserService;
        var_dump($userService -> showUserByName('joke'));
        echo $userService -> showUserByName('joke');
    }
    public function login(Request $request)
    {
        $userService = new UserService;
        $loginStatus = $userService -> checkLogin($request -> post('id'),$request -> post('password'));
        if (null != $loginStatus){
            return json([
                "type" => "success",
                "data" => $loginStatus
                ]);
        }
        else {
            return json(["type" => "error"]);
        }
    }
}
