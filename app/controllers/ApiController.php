<?php
class ApiController extends \DraftMVC\DraftController
{
    public function register() {
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        return array('success' => true);
    }
}
