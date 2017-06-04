<?php
$product_page = 12;
$direct_pages = 10;
$product_list_page = 20;

function dest_url($link, $page, $product_id=NULL)
{
    GLOBAL $kind;
    GLOBAL $key;
    $link .= "?page=$page";
    if($product_id)
        $link .= "&product_id=$product_id";
    if($key)
        $link .= "&kind=$kind&key=$key";
    return $link;
}
?>