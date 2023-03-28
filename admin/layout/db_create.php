<?php 
require("./db.php");

$sql = "CREATE TABLE IF NOT EXISTS donar (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL UNIQUE,
    email VARCHAR(500) NOT NULL UNIQUE,
    password VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table donar created successfully<br>";
} else {
    echo "Error creating table: donar";
}

$sql = "CREATE TABLE IF NOT EXISTS donation (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    amount VARCHAR(500) NOT NULL,
    donarid INT(6) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (donarid) REFERENCES donar(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table donation created successfully<br>";
} else {
    echo "Error creating table: donation";
}

$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL UNIQUE,
    email VARCHAR(500) NOT NULL UNIQUE,
    password VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully<br>";
} else {
    echo "Error creating table: user";
}

$sql = "CREATE TABLE IF NOT EXISTS user_req (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    reason VARCHAR(500) NOT NULL,
    amount VARCHAR(500) NOT NULL,
    status VARCHAR(500) NOT NULL,
    com VARCHAR(500) NOT NULL,
    userid INT(6) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (userid) REFERENCES user(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table user_req created successfully<br>";
} else {
    echo "Error creating table: user_req";
}

$sql = "CREATE TABLE IF NOT EXISTS member (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL UNIQUE,
    nationalid VARCHAR(500) NOT NULL UNIQUE,
    password VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table member created successfully<br>";
} else {
    echo "Error creating table: member";
}

$sql = "CREATE TABLE IF NOT EXISTS staff (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL UNIQUE,
    nationalid VARCHAR(500) NOT NULL UNIQUE,
    password VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table staff created successfully<br>";
} else {
    echo "Error creating table: staff";
}

$sql = "CREATE TABLE IF NOT EXISTS vol (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL UNIQUE,
    email VARCHAR(500) NOT NULL UNIQUE,
    hour VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table vol created successfully<br>";
} else {
    echo "Error creating table: vol";
}

?>