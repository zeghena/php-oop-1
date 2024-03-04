<?php


class Production
{
    public $title;

    public $language;

    public $vote;


    function __construct($title,$language,$vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
    
    public function getname()
    {
        return $this->title;
    }
}


$dexter = new Production();
$dexter->title = "Dexter";
$dexter->language = "English";
$dexter->vote = "8";

$braking_bad = new Production();
$braking_bad->title = "Braking_Bad";
$braking_bad->language = "Spanish";
$braking_bad->vote = "9";

$true_detective = new Production();
$true_detective->title = "True_Detective";
$true_detective->language = "English";
$true_detective->vote = "10";

$gomorra = new Production();
$gomorra->title = "Gomorra";
$gomorra->language = "Italian";
$gomorra->vote = "9.5";


var_dump($gomorra->getname());