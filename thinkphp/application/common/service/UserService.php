<?php
namespace app\common\service;
use app\common\model\User;
class UserService
{
    public function showUserByName($name)
    {
        $User =new User;
        $teachers = $User -> get(['name' => $name]);
        //var_dump($teacher -> getData('name'));
        return $teachers['password'];
    }
     public function checkLogin($id,$password)
     {
         $user = new User;
         $userList = $user -> get($id);
         if ($password==$userList['password']) {
             return $userList['name'];
         }  else {
            return null;
         }
     }
}