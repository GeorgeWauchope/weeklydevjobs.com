<?php 
function getVar($name) {
 if (isset($_POST [$name])) {
   return $_POST [$name];
 } return "";
}