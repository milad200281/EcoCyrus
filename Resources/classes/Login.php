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
}
