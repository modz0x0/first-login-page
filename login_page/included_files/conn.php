<?php


$conn = mysqli_connect("localhost","root","root","login_page");


if(!$conn){

    echo 'error' .mysqli_connect_error();

}

