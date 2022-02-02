<?php


namespace App\classes;
use App\classes\User;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
    protected $user;

    public function __construct($data=null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber   = $data['ending_number'];
        if(isset($data['odd_even'])){
            $this->oddEven = $data['odd_even'];
        }

    }

    public function index(){
        header('Location: Pages/index.php');
    }
    public function makeSeries()
    {
        if($this->startingNumber>$this->endingNumber) {
            if($this->oddEven =='odd')
            {
                return $this->bigToSmallOddSeries();
            }
            else if($this->oddEven =='even')
            {
                return $this->bigToSmallEvenSeries();
            }
            else
            {
                return $this->bigToSmallSeries();
            }

        }
        else{
            if($this->oddEven =='odd')
            {
                return $this->smallToBigOddSeries();
            }
            else if($this->oddEven =='even')
            {
                return $this->smallToBigEvenSeries();
            }
            else
            {
                return $this->smallToBig();
            }

            }
    }

    protected function smallToBigOddSeries()
    {
        for($this->i=$this->startingNumber; $this->i<=$this->endingNumber;$this->i++)
        {
            if($this->i%2 !=0){
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }

    protected function smallToBigEvenSeries()
    {
        for($this->i=$this->startingNumber; $this->i<=$this->endingNumber;$this->i++)
        {
            if($this->i%2 ==0){
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }
    protected function bigToSmallOddSeries()
    {
        for($this->i=$this->startingNumber; $this->i>=$this->endingNumber;$this->i--)
        {
            if($this->i%2 !=0){
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }

    protected function bigToSmallEvenSeries()
    {
        for($this->i=$this->startingNumber; $this->i>=$this->endingNumber;$this->i--)
        {
            if($this->i%2 ==0){
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
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