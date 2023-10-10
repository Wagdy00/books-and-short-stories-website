<?php
// Use to fetch product data
class book
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'book'){
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();

        //fetch books data
        while ($item =mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getProduct($id = null, $table= 'book'){
        if (isset($id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE id={$id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

}