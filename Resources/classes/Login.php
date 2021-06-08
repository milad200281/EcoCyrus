<?php
class Login extends Table
{
    protected static $table_name = "login";
    protected static $table_columns = ['username', 'password', 'user_status', 'user_token', 'user_email', 'user_last_login'];
    protected static $pk = "user_id";

    public $username;
    public $password;
    public $user_id;
    public $user_email;
    public $user_status;
    public $user_token;
    public $user_last_login;

    /**
     * hash-based k anonymity login system
     *
     * @param string $user the user email or username
     * @param string $password user password
     */
    public static function login_user($user,$password )
    {
    global $database;
    $user = $database->lw_clean($user);
    $password = $database->lw_clean($password);

        // $hashed_password = $password;
        // $first_hashed =  substr($hashed_password, 0, 5);

        // $sql = "SELECT SUBSTRING(password, 1, 5) FROM login WHERE (username = '$user' OR email = '$user') AND password like '$first_hashed%' ";

        $sql = "SELECT * from login where (username = '{$user}' OR user_email = '{$user}') AND password='{$password}' LIMIT 1";
        echo $sql;
        $result = self::run_query($sql);

        if(!empty($result)){
            $account = array_shift($result);
            global $session;
            $session->login($account->user_id,$account->username,$account->user_email,$account->user_status);
            return true;
        }else{
            return false;
        }

    }
}
