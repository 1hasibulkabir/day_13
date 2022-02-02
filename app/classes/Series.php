<?php


namespace App\classes;
use App\classes\User;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $user;

    public function __construct($data=null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber   = $data['ending_number'];
    }

    public function index(){
        header('Location: Pages/index.php');
    }
    public function makeSeries()
    {
        if($this->startingNumber>$this->endingNumber) {
            return $this->bigToSmallSeries();
        }
        else{
             return $this->smallToBig();
            }
    }
    protected function smallToBig(){
        for($this->i=$this->startingNumber; $this->i<=$this->endingNumber;$this->i++)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
    protected function bigToSmallSeries()
    {
        for($this->i=$this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result.=$this->i.' ';
        }
        return $this->result;
    }
}