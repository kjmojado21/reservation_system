<?php 

include 'Config.php';

// inhertance ->inherit 
class Reservation_app extends Config{

    public function create_login($username,$password){
        $sql = "INSERT INTO login(username,password)VALUES('$username','$password')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            return TRUE;
        }else{
            die('ERROR: '.$this->conn->error);
        }

    }

    public function create_user($fname,$lname,$contact){
        $loginId = $this->conn->insert_id;
        $sql = "INSERT INTO users(fname,lname,contact_number,login_id)VALUES('$fname','$lname','$contact','$loginId')";

         $result = $this->conn->query($sql);

        if($result == TRUE){
          header('location:index.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }

    }
    public function login($username,$password){
        $sql ="SELECT * FROM login INNER JOIN users ON login.login_id = users.login_id WHERE login.username = '$username' AND login.password = '$password'";
        $result = $this->conn->query($sql);



        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if($row['status']=='U'){
                $_SESSION['user_id'] = $row['login_id'];
                $_SESSION['firstname'] = $row['fname'];
                $_SESSION['lastname'] = $row['lname'];

                // print_r($row);
                // die();

                header('location:user_dashboard.php');

            }else{
                $_SESSION['admin_id '] = $row['user_id'];
                $_SESSION['admin_fname'] = $row['fname'];
                $_SESSION['admin_lname'] = $row['lname'];

                header('location:admin_dashboard.php');
            }
        }else{
           die("ERROR: ".$this->conn->error); 
        }

    }

    // admin side
    public function add_item($item_name,$desc){
        $sql = "INSERT INTO items(item_name,item_desc)VALUES('$item_name','$desc')";

        
        $result = $this->conn->query($sql);

        if($result == TRUE){
          header('location:admin_dashboard.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }

    }
    public function get_item_list(){
        $sql ="SELECT * FROM items";
        $result = $this->conn->query($sql);

        if($result->num_rows >0){
            $arr = array();
            while($row = $result->fetch_assoc()){
                $arr[] = $row;
            }
            return $arr;
        }else{
             return FALSE;
        }
    }

    public function get_items($status){

        $sql ="SELECT * FROM items WHERE status ='$status'";
        $result = $this->conn->query($sql);

        if($result->num_rows >0){
            $arr = array();
            while($row = $result->fetch_assoc()){
                $arr[] = $row;
            }
            return $arr;
        }else{
             return FALSE;
        }

    }

    public function get_one_item($id){
        $sql = "SELECT * FROM items WHERE item_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            return $result->fetch_assoc();
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }

    public function borrow_item($item_id,$user_id){
        $updateItemSql = "UPDATE items SET status ='BORROWED' WHERE item_id = '$item_id'";
    
        $sql1Result = $this->conn->query($updateItemSql);
        if($sql1Result == TRUE){

            $recordBorrowerSql = "INSERT INTO borrower(user_id,item_id)VALUES('$user_id','$item_id')";
            $sql2Result = $this->conn->query($recordBorrowerSql);

            if($sql2Result ==TRUE){

                echo "borrowed successfully";

            }else{

                die('ERROR SQL2: '.$this->conn->error);
            }

        }else{
            die('ERROR SQL1: '.$this->conn->error);
        }



    }
    public function add_annoucment($message){
       $sql = " INSERT INTO announcements(ann_message) VALUES ('$message')";
       $this->conn->query($sql);
       
       header('location:admin_dashboard.php');
    }

    public function display_announcement(){
        // $sql = "SELECT * FROM announcements";

        $sql ="SELECT * FROM announcements ORDER BY ann_id DESC LIMIT 1
        ";

        return $this->conn->query($sql)->fetch_assoc();
    }
    




}
