<?php

$connection = mysqli_connect('localhost','root','','book_db');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrival = $_POST['arrival'];
        $departure = $_POST['departure'];

        $request = " insert into book_form(name, email, phone, address, location, guests, arrival, departure) values
        ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrival', '$departure') ";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong please try again';
    }
?>