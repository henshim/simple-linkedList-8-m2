<?php
include_once 'LinkList.php';

$linkList = new LinkList();

$linkList->insertFirst(12);
$linkList->insertFirst(22);
$linkList->insertLast(32);
$linkList->insertLast(42);
$totalNode = $linkList->totalNode();
$linkData = $linkList->readList();

echo $totalNode.'-';
echo implode('-', $linkData);