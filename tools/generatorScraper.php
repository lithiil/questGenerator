<?php
/**
 * This script scrapes https://citygenerator.morgajel.net
 * It is not meant to be used for any type of commercial use
 */

require '../simple_html_dom.php';

function scrapeGenerator ($url, $selector) {

    $results = [];

    $html = file_get_html($url);

    $items = $html->find($selector);

    foreach ($items as $item) {
        array_push($results,$item->innertext);
    }
    return $results;
}


//Exmaples:
print_r(scrapeGenerator('https://citygenerator.morgajel.net/postinggenerator', '#postings li'));
print_r(scrapeGenerator('https://citygenerator.morgajel.net/rumorgenerator', '#rumors li'));
print_r(scrapeGenerator('https://citygenerator.morgajel.net/legendgenerator', '#legend li'));
print_r(scrapeGenerator('https://citygenerator.morgajel.net/bondgenerator', '#bonds li'));
