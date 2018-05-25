<?php
/**
 * Created by PhpStorm.
 * User: jimdv
 * Date: 17-Apr-18
 * Time: 11:21
 */

require_once "controller.php";
require_once "db\connection.php";

try {
    $con = db_connect();
} catch (Exception $exception) {
    if($exception->getCode() == 1049) {
        $temp_con = mysqli_connect("localhost", "root", "");
        $q = 'CREATE DATABASE IF NOT EXISTS p4Blog; 
              USE p4Blog;
              CREATE TABLE IF NOT EXISTS posts (
                  id INT PRIMARY KEY AUTO_INCREMENT,
                  title VARCHAR(256) UNIQUE NOT NULL,
                  body TEXT NOT NULL,
                  created_at DATETIME NOT NULL DEFAULT NOW(),
                  updated_at DATETIME NOT NULL DEFAULT NOW() on update NOW(),
              )';

        $temp_con->query($q);
    }
    $con = db_connect();
}
