<?php 
require 'autoload.php';
$session = new App_Core_Session(); 
$users = App_Classes_Users::getAll(); 
$db = new App_Models_DB('mysql');


