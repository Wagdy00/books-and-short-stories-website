<?php
include_once 'DBController.php';

class Crud extends DBController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($query)
    {
        $result = $this->con->query($query);

        if ($result == false) {
            return false;
        }

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function execute($query)
    {
        $result = $this->con->query($query);

        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }
    }

    public function delete($id, $table)
    {
        $query = "DELETE FROM $table WHERE id = $id";

        $result = $this->con->query($query);

        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    public function escape_string($value)
    {
        return $this->con->real_escape_string($value);
    }

    public function storyDetails($id){
        $result = $this->db->con->query("SELECT * FROM {$table}");
    }
}
?>