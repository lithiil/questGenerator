<?php
/**
 * This script scrapes https://citygenerator.morgajel.net
 * It is not meant to be used for any type of commercial use
 * If you are the owner of this site and you are not ok with the using of this script email me and I will remove it
 */

require '../simple_html_dom.php';

function scrapeGenerator($url, $selector)
{

    $results = [];

    $html = file_get_html($url);

    $items = $html->find($selector);

    foreach ($items as $item) {

        $result = $item->innertext;

        if (strpos($result, '<h2>Summary</h2>')) {
            $result = trim(str_replace('<h2>Summary</h2>', '', $result));
        }
        array_push($results, $result);
    }
    return $results;
}


//Exmaples:
// Generate Quest Post Sign
//print_r(scrapeGenerator('https://citygenerator.morgajel.net/postinggenerator', '#postings li'));
// Generate Rumors
//print_r(scrapeGenerator('https://citygenerator.morgajel.net/rumorgenerator', '#rumors li'));
//Generate Legends
//print_r(scrapeGenerator('https://citygenerator.morgajel.net/legendgenerator', '#legend li'));
//Generate Bonds
//print_r(scrapeGenerator('https://citygenerator.morgajel.net/bondgenerator', '#bonds li'));
//Generate Magic Item
//print_r(scrapeGenerator('https://citygenerator.morgajel.net/magicitemgenerator', '#summary'));


