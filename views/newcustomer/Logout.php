<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ruchit
 * Date: 9/25/2016
 * Time: 11:09 AM
 */
 session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo 'You have cleaned session';
   header('Refresh: 2; URL = Login.php');
?>