<?php
class Database
{
    private $connection;
    /**
     * connect to database on create
     * Die if can not connect
     */
    function __construct()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->connection->connect_errno) {
            die("Database connection failed: " . $this->connection->connect_error);
        }
    }
    /**
     * on destruction of the object the connection is closed 
     */
    function __destruct()
    {
        $this->connection->close();
    }
    /**
     * run a query on the connection
     * @param string $sql the sql query to be run
     */
    public function query($sql)
    {
        $result = $this->connection->query($sql);
        return $this->confirm_query($result);
    }
    /**
     * check the result of a query whether it was success full
     * dies if query fails
     * @return array the result of the query
     */
    public function confirm_query($result)
    {
        if ($result) {
            return $result;
        } {
            die("Query Failed: " . $this->connection->error);
        }
    }
    /**
     * trim and escape a given string and return it
     * @return string the escaped string
     */
    public function escape($string)
    {
        return $this->connection->real_escape_string(trim($string));
    }
    /**
     * trim, escape, and strip the html and php tags from a given string and return it
     * @return string the cleaned string
     */
    public function clean($string)
    {
        return strip_tags($this->escape($string));
    }
    /**
     * trim, escape, lower case, and strip the html and php tags from a given string and return it
     * @return string the cleaned string
     */
    public function lw_clean($string)
    {
        return strtolower($this->clean($string));
    }
    /**
     * trim, escape, and replace '<' and '>' with html unicode on a given string and return it
     * @return string the html cleaned string
     */
    public function clean_html($string)
    {
        $string = $this->escape($string);
        $string = str_replace('<', '&#60;', $string);
        $string = str_replace('>', '&#62;', $string);
        return $string;
    }
    /**
     * return the next insert id
     * @return string next insert id
     */
    public function insert_id()
    {
        return $this->connection->insert_id;
    }
}
$database = new Database();
