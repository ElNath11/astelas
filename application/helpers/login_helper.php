<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('checkLogin'))
{
    function checkLogin(){
  $CI =& get_instance();  //get instance, access the CI superobject
  $isLoggedIn = $CI->session->userdata('is_logged_in');
  return $isLoggedIn;
    }

 function checkRole(){
  $CI =& get_instance();  //get instance, access the CI superobject
  $role = $CI->session->userdata('role');
  return $role;
    }

 function getID(){
  $CI =& get_instance();  //get instance, access the CI superobject
  $id = $CI->session->userdata('id');
  return $id;
    }

 function getName(){
  $CI =& get_instance();  //get instance, access the CI superobject
  $data = $CI->session->userdata('user');
  $fname = $CI->session->userdata('frontName');
  $lname = $CI->session->userdata('lastName');

  if ($fname != ""){
   $ret = $fname." ".$lname;
  } else {
   $ret = $data;
  }
  return $ret;
 }

 function getData(){
  $CI =& get_instance();  //get instance, access the CI superobject
  $data = $CI->session->all_userdata();
  return $data;
 }

 function out(){
  if (!checkLogin()){
   redirect('/login');
  } else {
   redirect('/admin');
  }
 }
}

?>
