<?php
    function emptyInputSignup($name, $email, $username, $pwd, $pwdconfirm) {
        $result;
        if (empty($name) || empty($email) || empty($email) || empty($pwd) || empty($pwdconfirm)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }