<?php

class DBController{
    //database connection properties
    protected $host ='localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'mobile_shopee';

    //connection properties
     public $con = null;

     //call contructor
    public function __construct(){
        $this->con = mysqli_connect( $this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "fail".$this->con->connect_error;
        }else{
            echo "Database Connect Successfully";
        }
    }

    //destructor
    public function __destruct(){
        $this->closeConnection();
    }


    //Closing connection
    protected function closeConnection(){
        if ($this->con!= null)  {
            $this->con->close();
            $this->con = null;
        }
    }

}

?>