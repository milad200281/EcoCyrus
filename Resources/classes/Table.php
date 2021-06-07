<?php
abstract class Table
{
    protected static $table_name;
    protected static $table_columns;
    protected static $pk;

    public $errors = array();
    public $upload_errors = array(
        UPLOAD_ERR_OK           => "There is no error",
        UPLOAD_ERR_INI_SIZE        => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
        UPLOAD_ERR_FORM_SIZE    => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
        UPLOAD_ERR_PARTIAL      => "The uploaded file was only partially uploaded.",
        UPLOAD_ERR_NO_FILE      => "No file was uploaded.",
        UPLOAD_ERR_NO_TMP_DIR   => "Missing a temporary folder.",
        UPLOAD_ERR_CANT_WRITE   => "Failed to write file to disk.",
        UPLOAD_ERR_EXTENSION    => "A PHP extension stopped the file upload."
    );



    /**
     * find all the rows in the table and return them as an array of Objects of the class
     * @return array an array object of the result 
     */
    public static function find_all()
    {
        $sql = "SELECT * FROM " . static::$table_name . ";";
        return static::run_query($sql);
    }
    /**
     * find the row with the given primary key and return is as a class object
     * @return object an object of the class for the row with the given id
     * @return false if the pk does not exists
     */
    public static function find_by_id($id)
    {
        global $database;
        $id = $database->lw_clean($id);
        $sql = "SELECT * FROM " . static::$table_name . " WHERE " . static::$pk . " = '{$id}' LIMIT 1; ";
        $result = static::run_query($sql);
        return !empty($result) ? array_shift($result) : false;
    }

    /**
     * run a query and return the results as an array of class object
     * @return array array of class objects from the result of the query
     */
    public static function run_query($sql)
    {
        global $database;
        $result = $database->query($sql);
        $obj_array = array();
        while ($row = mysqli_fetch_array($result)) {
            $obj_array[] = static::instantiate($row);
        }
        return $obj_array;
    }

    /**
     * insert a row into the table base on the current calling object
     * @return true on successful insertion
     * @return false on failed insertion
     */
    public function create()
    {


        global $database;
        $properties = $this->clean_properties();

        $sql = "INSERT INTO " . static::$table_name . " (" . implode(",", array_keys($properties)) . ") VALUES('" . implode("','", array_values($properties)) . "');";

        if ($database->query($sql)) {
            $id = static::$pk;
            $this->$id = $database->insert_id();
            return true;
        } else {
            return false;
        }
    }
    /**
     * update the current calling object in the table
     * @return true on <=1 affected rows
     * @return false on >1 affected rows
     */
    public function update()
    {

        global $database;
        $id = static::$pk;

        if (!isset($this->$id)) return false;

        $properties = $this->clean_properties();
        $values = array();

        foreach ($properties as $key => $value) {
            $values[] = "{$key} = '{$value}'";
        }

        $id = $database->lw_clean($this->$id);
        $sql = "UPDATE " . static::$table_name . " SET " . implode(",", $values) . "WHERE " . static::$pk . " = '{$id}';";

        $database->query($sql);
        //this checks that there must be a change
        return ($database->affected_rows() <= 1) ? true : false;
    }
    /**
     * delete the given object from database
     * @return true if one row is affected
     * @return false if one row is not affected
     */
    public function delete()
    {

        global $database;
        $id = static::$pk;

        if (!isset($this->$id)) return false;

        $id = $database->lw_clean($this->$id);
        $sql = "DELETE FROM " . static::$table_name . " WHERE " . static::$pk . " = '{$id}' ;";
        $database->query($sql);

        return $database->affected_rows() == 1 ? true : false;
    }

    /**
     * if the PK is set, update the object else creates it
     * @return true on successful insertion / on <=1 affected rows
     * @return false on failed insertion / on >1 affected rows
     */
    public function save()
    {
        $id = static::$pk;
        return isset($this->$id) ? $this->update() : $this->create();
    }
    /**
     * return the number of all the rows in the table
     * @return int number of the rows
     */
    public static function count_all()
    {
        global $database;
        $sql = "SELECT COUNT(" . static::$pk . ") FROM " . static::$table_name;
        return $database->query($sql);
    }
    /**
     * create an associative array of the object properties and returns it
     * @return array array of the object properties
     */
    private function properties()
    {
        $properties = array();
        foreach (static::$table_columns as $field) {
            if (property_exists($this, $field)) {
                $properties[$field] = $this->$field;
            }
        }
        return $properties;
    }
    /**
     * create a cleaned associative array of the object properties and returns it
     * @return array cleaned array of the object properties
     */
    private function clean_properties()
    {
        $properties = array();
        global $database;
        foreach ($this->properties() as $key => $value) {
            $properties[$key] = $database->escape($value);
        }
        return $properties;
    }

    /**
     * gets a record from database and creates an object of the calling class and return it
     * @return object an object of the calling class based on the given record
     */
    public static function instantiate($result)
    {
        $class = get_called_class();
        $obj = new $class();

        foreach ($result as $key => $value) {
            if ($obj->has_attribute($key)) {
                $obj->$key = $value;
            }
        }
        return $obj;
    }

    /**
     * checks if the class has the given attribute
     * @return true if class includes the attribute
     * @return false if class doesn't include the attribute
     */
    private function has_attribute($attr)
    {
        return array_key_exists($attr, get_object_vars($this));
    }
}
