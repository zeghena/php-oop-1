<?php


class Production
{
    public $title;

    public $language;

    public $vote;
}

$dexter = new Production();
$dexter->title = "Dexter";
$dexter->language = "English";
$dexter->vote = "8";

$braking_bad = new Production();
$braking_bad->title = "braking_bad";
$braking_bad->language = "Spanish";
$braking_bad->vote = "9";

$true_detective = new Production();
$true_detective->title = "true_detective";
$true_detective->language = "English";
$true_detective->vote = "10";

$gomorra = new Production();
$gomorra->title = "gomorra";
$gomorra->language = "Italian";
$gomorra->vote = "9.5";


var_dump($gomorra);