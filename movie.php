<?php


class Movie extends Production
{
    public $profit;

    public $duration;



   public function __construct($profit, $duration,$title,$language,$vote){
    parent::__construct($title,$language,$vote);
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