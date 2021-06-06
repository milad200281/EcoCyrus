<?php
class Session
{
    // message info
    private $message;
    private $type;
    // Login info
    private $user_id;
    private $username;
    private $user_email;
    private $user_status;
    // visitor info
    private $last_visit;
    /**
     * Construct a Session object and runs the necessary methods
     */
    function __construct()
    {
        session_start();
        $this->check_message();
        $this->check_login();
    }
    /**
     * if message is not set, returns the message from the object
     * if it is set, set it to session and objects message
     * @param string $msg the message to set into SESSION
     * @param string $type type of the class of the message
     * @return string on empty msg, returns the objects message
     */
    function message($msg = "", $type = 'succuss')
    {
        if (empty($msg)) {
            return $this->message;
        } else {
            $this->message = $_SESSION['message'] = $msg;
            $this->type = $_SESSION['type'] = $type;
        }
    }
    /**
     * check if there is any message in the SESSION,
     * if yes, set it to object message variable
     */
    function check_message()
    {
        if (isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }
    }
    /**
     * return true if the user is logged in
     * @return true if logged in
     * @return false if logged out
     */
    function isLoggedIn()
    {
        if (empty($user_id)) {
            return false;
        } else {
            return true;
        }
    }
    /**
     * get the user id
     * @return string user id
     */
    function get_user_id()
    {
        return $this->user_id;
    }
    /**
     * get the username
     * @return string username
     */
    function get_username()
    {
        return $this->username;

    }
    /**
     * get the user email
     * @return string user email
     */
    function get_user_email()
    {
        return $this->user_email;

    }
    /**
     * return the status of the user
     * @return string the user status
     * @return false there is no user logged in
     */
    function get_user_status()
    {
        if (isset($this->user_status)) {
            return $this->user_status;
        } else {
            return false;
        }
    }
    /**
     * check if the logged in user is admin
     * @return true if user is admin
     * @return false if user is not admin
     */
    function isAdmin()
    {
        if ($this->get_user_status() === 'admin') {
            return true;
        } else {
            return false;
        }
    }
    /**
     * login a user to the object and the SESSION
     * @param string $id the user id
     * @param string $uname the username
     * @param string $email the user email
     * @param string $status the user status
     */
    function login($id, $uname, $email, $status)
    {
        $this->user_id = $_SESSION['user_id'] = $id;
        $this->username = $_SESSION['username'] = $uname;
        $this->user_email = $_SESSION['user_email'] = $email;
        $this->user_status = $_SESSION['user_status'] = $status;
    }
    /**
     * logout the user by clearing the SESSION and the object
     */
    function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_status']);

        unset($this->user_id);
        unset($this->username);
        unset($this->user_email);
        unset($this->user_status);
    }
    /**
     * check if the user is logged-in in the SESSION and sets it to the objects variables
     */
    function check_login()
    {
        if (isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['user_email']) && isset($_SESSION['user_status'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->username = $_SESSION['username'];
            $this->user_email = $_SESSION['user_email'];
            $this->user_status = $_SESSION['user_status'];
        } else {
            unset($this->user_id);
            unset($this->username);
            unset($this->user_email);
            unset($this->user_status);
        }
    }


}

$session = new Session();
$message = $session->message();
