<?php

class UserController {

    public function actionRegister() {

        $name = '';
        $email = '';
        $password = '';


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;


            if (!User::checkName($name)) {
                $errors[] = "Ім'я не має бути коротше ніж 2 символи.";
            }

            if (!User::checkEmail($email)) {
                $errors[] = "Неправильний Email";
            }

            if (!User::checkPassword($password)) {
                $errors[] = "Пароль не має бути коротше ніж 6 символи.";
            }

            if (User::checkEmailExists($email)) {
                $errors[] = "Такий email вже використовується.";
            }

            if ($errors == false) {
                // code
            }

        }








        require_once(ROOT.'/views/user/register.php');

        return true;

    }

}


?>