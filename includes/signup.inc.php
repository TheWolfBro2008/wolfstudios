<? php 

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdconfirm = $_POST["pwdconfirm"]

    require_once 'dbh.inc.php';
    require_once 'function.inc.php'

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdconfirm) !== false) {
        header("location: ../register.php?error=emptyinput")
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../register.php?error=invaliduid")
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail")
        exit();
    }

    if (pwdMatch($pwd, $pwdconfirm) !== false) {
        header("location: ../register.php?error=passwordsdontmatch")
        exit();
    }

    if (uidExists($conn, $username) !== false) {
        header("location: ../register.php?error=usernametaken")
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../register.php");
}
