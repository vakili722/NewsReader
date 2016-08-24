<?php

require('./simple_html_dom.php');
require('./helper_function.php');
require('./mysql_configuration.php');
require('./WP_XMLRPC.php');
include('./category_arr.php');

$confs[0] = [
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
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[1] = [
    'site' => 'http://www.khanehkheshti.com/category/base/',
    'category' => 'politic',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[2] = [
    'site' => 'http://www.khanehkheshti.com/category/%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9%DB%8C/',
    'category' => 'society',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[3] = [
    'site' => 'http://www.khanehkheshti.com/category/%d9%81%d8%b1%d9%87%d9%86%da%af%db%8c-%d9%85%d8%b0%d9%87%d8%a8%db%8c/',
    'category' => 'culture',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[4] = [
    'site' => 'http://www.khanehkheshti.com/category/%d8%a7%d9%82%d8%aa%d8%b5%d8%a7%d8%af%db%8c/',
    'category' => 'economy',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[5] = [
    'site' => 'http://www.khanehkheshti.com/category/%d9%88%d8%b1%d8%b2%d8%b4%db%8c/',
    'category' => 'sport',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[6] = [
    'site' => 'http://www.khanehkheshti.com/category/%d8%b7%d9%86%d8%b2-%d9%88-%da%a9%d8%a7%d8%b1%db%8c%da%a9%d8%a7%d8%aa%d9%88%d8%b1/',
    'category' => 'satire',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[7] = [
    'site' => 'http://www.khanehkheshti.com/category/%d8%ad%d9%88%d8%a7%d8%af%d8%ab/',
    'category' => 'event',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[8] = [
    'site' => 'http://www.khanehkheshti.com/category/%d9%be%d8%b2%d8%b4%da%a9%db%8c-%d9%88-%d8%b3%d9%84%d8%a7%d9%85%d8%aa/',
    'category' => 'healt',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[9] = [
    'site' => 'http://www.khanehkheshti.com/category/picnews/',
    'category' => 'picture',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];

$confs[10] = [
    'site' => 'http://www.khanehkheshti.com/category/%d8%b9%d9%84%d9%85-%d9%88-%d9%81%d9%86-%d8%a2%d9%88%d8%b1%db%8c/',
    'category' => 'thecnology',
    'reference' => 'خانه خشتی',
    'referenceLink' => 'http://www.khanehkheshti.com/',
    'items' => '#content .post',
    'title' => '.title a',
    'link' => '.title a',
    'abstract' => '.info p',
    'content' => [
        'publishedDate' => '.header span$2',
        'text' => [
            'trash' => ['div .ssba', '.ssba-wrap'],
            'start' => '#kholaseh',
            'end' => 'br + .clear'
        ],
        'img' => '.wp-post-image'
    ]
];


foreach ($confs as $conf) {
    var_dump($conf['site']);
    $rawHtml = file_get_html($conf['site']);

//$temp = '';
    foreach ($rawHtml->find($conf['items']) as $element) {
        $title = $element->find($conf['title'], 0)->plaintext;
        $link = $element->find($conf['link'], 0)->href;
        $abstract = $element->find($conf['abstract'], 0)->plaintext;
        $content = [];
        $index = array_keys($conf['content']);

        if (is_new_news($title) == true) {
            feach_content($content, $index, $conf['content'], $link);
            send_new_post_to_wp($title, $content['text'], $CATEGORY[$conf['category']]);
//        $temp .= "\n" . $title . "\n";
//        $temp .= $link . "\n";
//        $temp .= $abstract . "\n";
//
//        $temp .= implode("\n", $content);
//
//        $temp .= "\n";
//        $temp .= "\n";
//        $temp .= "\n";
            insert_new_news($title);
//        var_dump($link);
            sleep(20);
        }
    }
}
db_close_conn();

//file_put_contents('test.html', $temp);