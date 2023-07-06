<?php
$conn  = mysqli_connect('localhost','root','123456','web');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}