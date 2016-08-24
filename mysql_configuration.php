<?php
// mySql configuration

$_MYSQL_CONF = [
    'host' => 'localhost',
    'table' => 'test1.test',
    'user' => 'root',
    'pass' => 'toor'
];

// Create connection
$_CONN = mysqli_connect($_MYSQL_CONF['host'], $_MYSQL_CONF['user'], $_MYSQL_CONF['pass']);

// Check connection
if (!$_CONN) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully\n";
}


function is_new_news($title_plus_pubdate)
{
    global $_CONN;
    global $_MYSQL_CONF;
    $hash = md5($title_plus_pubdate);
    $sql = "SELECT * FROM $_MYSQL_CONF[table] WHERE hash='$hash' LIMIT 1000";
    $result = $_CONN->query($sql);

    if ($result->num_rows > 0) {
        return false;
    } else{
        return true;
    }
}

// return true if news is a new
function insert_new_news($title_plus_pubdate)
{
    global $_CONN;
    global $_MYSQL_CONF;
    $date = date('Y/m/d');
    $sql = "INSERT INTO $_MYSQL_CONF[table] (date, hash) VALUES ('$date', '@')";

    $hash = md5($title_plus_pubdate);
    $sql = str_replace('@', $hash, $sql);

    if ($_CONN->query($sql) === TRUE) {
        echo "New record created successfully\n";
    } else {
        echo "Error: " . $sql . "<br>" . $_CONN->error;
    }

    return true;
}

function db_close_conn(){
    global $_CONN;
    $_CONN->close();
    echo "Connection Closed Successfully\n";
}
//var_dump($sql);