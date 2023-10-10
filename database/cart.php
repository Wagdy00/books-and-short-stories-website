<?php

class cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public function insertIntoCart($params = null, $table = "cart")
    {
        if ($this->db->con != null) {
            if ($params != null) {
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert into cart table
    public function addToCart($userid, $id)
    {
        if (isset($userid) && isset($id)) {
            $params = array(
                "user_id" => $userid,
                "id" => $id
            );

            // insert data into cart
            $result =$this->insertIntoCart($params);
            if($result){
                // reload page
                header("location".$_SERVER['PHP_SELF']);
            }
        }
    }

    // delete from wishlist
    public function deleteCart($id = null, $table = 'cart'){
        if($id!= null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE id={$id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


    // delete cart item using cart item id
    public function deleteWish($id = null, $table = 'wishlist'){
        if($id!= null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE id={$id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


    // calculate sub total
    public function getSum ($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }


    // get item_it of shopping cart list
    public function getCartId($cartArray = null, $key = "id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // Save for later
    public function saveForLater($id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE id={$id};";
            $query .= "DELETE FROM {$fromTable} WHERE id={$id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

}
