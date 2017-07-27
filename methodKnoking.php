<?php
session_start();

//define
if(!isset($_SESSION['knok'])) $_SESSION['knok'] = array();
if(!isset($_SESSION['access'])) $_SESSION['access'] = false;

// methods to check in order
$methods=array('BOOBS','DICK','PUSSY');

//get
$method = $_SERVER['REQUEST_METHOD'];
$step = count($_SESSION['knok']);

//check
if($method === $methods[$step]){
 
    $_SESSION['knok'][$step] = $methods[$step];
}
//if fail reset
else{
  
    $_SESSION['knok'] = array();
} 

//check
if(count($methods) === count($_SESSION['knok'])){
    $_SESSION['access'] = true;
}

if($_SESSION['access']){
    //your data here
    echo 'IN';
 
}
else{
    // what else ?
    //echo 'FAIL';
}
 
?>
