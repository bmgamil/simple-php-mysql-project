<?php
$servername = 'some-mysql';
$username = 'root';
$password = '@connectme';

// $servername = 'localhost';
// $username = 'root';
// $password = 'root';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "create database shangout;";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "use shangout;";
if ($conn->query($sql) === TRUE) {
    echo "use shangout";
} else {
    echo "Error use shangout " . $conn->error;
}

$sql = 'create table students (
    id int not null primary key,
    name varchar(50) not null,
    email varchar(50) not null,
    AGE int not null,
    gender varchar(1) not null,
    password varchar(50) not null
    );';
if ($conn->query($sql) === TRUE) {
    echo "create table students";
} else {
    echo "Error create table students " . $conn->error;
}

$sql = 'create table messages (
    id int not null primary key,
    sender_id int,
    receiver_id int,
    message varchar(500)
    );';
if ($conn->query($sql) === TRUE) {
    echo "create table messages";
} else {
    echo "Error create table messages " . $conn->error;
}

$sql = 'create table friends (
    id int not null primary key,
    receiver_id int not null,
    receiver_name varchar(50),
    friend_id int not null,
    friend_name varchar(50),
    status int default 0,
    comp int default 0
    );';
if ($conn->query($sql) === TRUE) {
    echo "create table friends";
} else {
    echo "Error create table friends " . $conn->error;
}

$sql = 'create table are_friends (
    id int not null primary key,
    frnd_one_id int,
    frnd_two_id int,
    status int default 0,
    extra int default 0
    );';
if ($conn->query($sql) === TRUE) {
    echo "create table are_friends";
} else {
    echo "Error create table are_friends " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `status_here` (
    `id` int(11) NOT NULL AUTO_INCREMENT, 
    `status` varchar(300) DEFAULT NULL,
    `user_id` int(11) NOT NULL,
    `timestamp` timestamp NOT NULL,
    `future_use` int(11) DEFAULT NULL,
     primary key(id)
     );";
if ($conn->query($sql) === TRUE) {
    echo "create table are_friends";
} else {
    echo "Error create table are_friends " . $conn->error;
}
$conn->close();
?>