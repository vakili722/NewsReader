<?php
include_once('IXR_Library.php');

$_USR = 'newsrobot';
$_PWD = '7c&*&qzhMZ3u@seu%6)beOXZ';
$_XMLRPC = 'http://iyan.ir/rafsanjan/xml0rpc.php';
$_ID_BOT = 9;

// Create the client object
$_CLIENT = new IXR_Client($_XMLRPC);

function send_new_post_to_wp($post_title, $post_content, $category)
{
    global $_ID_BOT;
    global $_CLIENT;
    global $_USR;
    global $_PWD;

    $content = [
        'post_title' => $post_title,
        'post_content' => $post_content,
        'post_status' => 'publish',
        'post_author' => $_ID_BOT,
        'terms' => array('category' => array($category)),
        'post_type' => 'post',
        'comment_status' => 'open'
    ];

// Run a query for PHP
    if (!$_CLIENT->query('wp.newPost', 0, $_USR, $_PWD, $content)) {
        die('Something went wrong - ' . $_CLIENT->getErrorCode() . ' : ' . $_CLIENT->getErrorMessage());
    } else {
        echo "Article Posted Successfully";
    }
    
// Display the result
    echo "\n";
    var_dump($_CLIENT->getResponse());
}