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

    function invalidUid($username) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/"), $username) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function pwdMatch($pwd, $pwdconfirm) {
        $result;
        if ($pwd !== $pwdconfirm) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function uidExists($conn, $username, $email) {
        $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare()) {

        }
    }