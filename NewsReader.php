<?php

require('./simple_html_dom.php');
require('./helper_function.php');
require('./mysql_configuration.php');
require('./WP_XMLRPC.php');
include('./category_arr.php');

$conf = [
    'site' => 'http://www.khanehkheshti.com/category/ra/',
    'category' => 'city',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];
var_dump(yaml_parse_file('./sites.yaml'));
$rawHtml = file_get_html($conf['site']);

$temp = '';
foreach ($rawHtml->find($conf['items']) as $element) {
    $title = $element->find($conf['title'], 0)->plaintext;
    $link = $element->find($conf['link'], 0)->href;
    $abstract = $element->find($conf['abstract'], 0)->plaintext;
    $content = [];
    $index = array_keys($conf['content']);
    feach_content($content, $index, $conf['content'], $link);

    if (is_new_news($title . $content['publishedDate']) == true) {
        send_new_post_to_wp($title,$content['text'],$CATEGORY[$conf['category']]);
//        $temp .= "\n" . $title . "\n";
//        $temp .= $link . "\n";
//        $temp .= $abstract . "\n";
//
//        $temp .= implode("\n", $content);
//
//        $temp .= "\n";
//        $temp .= "\n";
//        $temp .= "\n";
        insert_new_news($title . $content['publishedDate']);
//        var_dump($link);
        sleep(5);
    }
}

db_close_conn();

//file_put_contents('test.html', $temp);