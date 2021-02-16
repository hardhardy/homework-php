<?php
function getOrder() {
  $session_id = session_id();
  $sql ="SELECT * FROM `orders` WHERE `session_id`='{$session_id}'";
  $orders = getAssocResult($sql);
  return $orders;
}