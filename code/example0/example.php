<?php
/**
 * @file Create user.
 */
include  'inc/user.php';
$first='James';
$last='Bond';
if(strlen($first) >= 2){
  if(strlen($last) >= 2){
  $r = php_bergen_create_user($first, $last);
  print_r($r);
}}

?>