<?php

require_once('./simple_html_dom.php');

function feach_content(& $content, $indexs, $conf, $link) {
    $rawHtml = file_get_html($link);

    foreach ($indexs as $index) {
        switch ($index) {
            case 'img':
                // $content[$index] = $rawHtml->find($conf[$index], 0)->src;
                break;
            case 'text':
                get_text_news($content, $rawHtml, $conf[$index], $index);
                break;
            default:
                $temp = explode('$', $conf[$index]);
                $content[$index] = $rawHtml->find($temp[0], $temp[1])->plaintext;
        }
    }
}

function is_trash($element, $rawHtml, $trash) {
    foreach ($trash as $t) {
        foreach ($rawHtml->find($t) as $el) {
            if ($element === $el) {
                return true;
            }
        }
    }
    return false;
}

function get_text_news(& $content, & $rawHtml, $conf, $index) {
    $content[$index] = '';
    $startTag = $rawHtml->find($conf['start'], 0);
    $endTag = $rawHtml->find($conf['end'], 0);

    $element = $startTag;
    while (($element !== null) && ($element !== $endTag)) {
        if (!is_trash($element, $rawHtml, $conf['trash'])) {
            $content[$index] .= "\n" . $element->innertext;
        }
        $element = $element->next_sibling();
    }
}
