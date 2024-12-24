<?php 

    class Config{
        private $host = "localhost";
        private $usermane = "root";
        private $password = "";
        private $datbase = "customer";
        private $connection;

        public function connect()
        {
          $this->connection = mysqli_connect($this->host,$this->usermane,$this->password,$this->datbase);
        }

        public function __construct()
    {
      $this->connect();
    }

    // User [Insert And Fetch]

    public function insert ($name,$email,$phone)
    {
      $query = "INSERT INTO users (name,email,phone) VALUES('$name','$email',$phone)";
      $res = mysqli_query($this->connection,$query);
      return $res;
    }   

    public function fetch()
    {
      $query = "SELECT * FROM users";
      $res = mysqli_query($this->connection, $query);
      return $res;
    }

    // Product [Insert And Update]

    public function insert_product ($product_name,$price)
    {
      $query = "INSERT INTO products (product_name,price) VALUES('$product_name',$price)";
      $res = mysqli_query($this->connection,$query);
      return $res;
    }    


    public function updateProduct($id,$price)
    {
        $query = "UPDATE products SET  price=$price WHERE id=$id";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    // Order Table [Insert And Delete]

    public function insert_order ($order_date,$status)
    {
      $query = "INSERT INTO orders (order_date,status) VALUES('$order_date','$status')";
      $res = mysqli_query($this->connection,$query);
      return $res;
    }    


    public function delete($id)
    {
        $query = "DELETE FROM orders WHERE id = $id";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

}


?>







