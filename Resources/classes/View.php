<?php
class View
{
    private $view_name;
    private $view_pk;

    /**
     * create an object of a specific view
     * @param string $v_name the name of the view
     * @param string $pk the name of the primary key column
     */
    public function __construct($v_name, $pk)
    {
        global $database;
        $this->view_name = $database->lw_clean($v_name);
        $this->view_pk = $database->lw_clean($pk);
    }

    /**
     * select all from the view and returns the result
     * @return mysqli_result all rows of view as mysqli_result
     */
    public function select_all()
    {
        $sql = "SELECT * FROM " . $this->view_name . " ;";
        return self::run_query($sql);
    }

    /**
     * select by the given pk value and return it
     * @param string $condition which comes after WHERE
     * @return mysqli_result all rows matching the condition of view as mysqli_result
     */
    public function select_by_condition($condition)
    {
        global $database;
        $condition = $database->lw_clean($condition);
        $sql = "SELECT * FROM " . $this->view_name . " WHERE " . $condition . ";";
        return self::run_query($sql);
    }
    /**
     * select by the given pk value and return it
     * @param string/int $id primary key value of the view
     * @return mysqli_result row  with pk value of view as mysqli_result
     */
    public function select_by_id($id)
    {
        global $database;
        $id = $database->lw_clean($id);
        $sql = "SELECT * FROM " . $this->view_name . " WHERE " . $this->view_pk . " = '$id' LIMIT 1 ;";
        return self::run_query($sql);
    }

    /**
     * run a query on the database
     * @param mysqli_result $sql the sql query to be 
     * @return mysqli_result the result of the query
     */
    private static function run_query($sql)
    {
        global $database;
        return $database->query($sql);
    }
}
