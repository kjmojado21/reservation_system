<?php 
include 'classes/Reservation_app.php';
$reservation_app = new Reservation_app;

if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $c_number = $_POST['c_number'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

  $validate =  $reservation_app->create_login($uname,$pword);

  if($validate == TRUE){
    $reservation_app->create_user($fname,$lname,$c_number);
  }

}elseif(isset($_POST['login'])){
  

    $uname = $_POST['username'];
    $pword = $_POST['password'];

   
    $reservation_app->login($uname,$pword);

}elseif(isset($_POST['save_item'])){
    $item_name = $_POST['item_name'];
    $desc = $_POST['desc'];

    $reservation_app->add_item($item_name,$desc);

}elseif(isset($_POST['borrow'])){
  $user_id = $_SESSION['user_id'];
  $item_id = $_POST['item_id'];

  $reservation_app->borrow_item($item_id,$user_id);
}elseif(isset($_POST['add_announcent'])){
  $announcement = $_POST['announcement'];

  $reservation_app->add_annoucment($announcement);
}


?>