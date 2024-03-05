<?php


class Movie
{
    public $profit;

    public $duration;



    function __construct($profit, $duration)
    {
        $this->profit = $profit;
        $this->duration = $duration;
    }
    
    
    public function getProfit()
    {
        return $this->profit;
    }

    public function getDuration()
    {
        return $this->duration;
    }

}