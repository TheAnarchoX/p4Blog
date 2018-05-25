<?php
/**
 * Created by PhpStorm.
 * User: jimdv
 * Date: 17-Apr-18
 * Time: 11:21
 */

function db_connect() {
    return mysqli_connect("localhost", "root", "", "p4blog");
}

?>