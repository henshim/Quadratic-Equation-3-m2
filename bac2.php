<?php


class bac2
{
    public $a;
    public $b;
    public $c;

    public function setA($x)
    {
        $this->a = $x;
    }

    /**
     * @param mixed $b
     */
    public function setB($y)
    {
        $this->b = $y;
    }

    /**
     * @param mixed $c
     */
    public function setC($z)
    {
        $this->c = $z;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    public function getDricriminat()
    {
        return ($this->getB() * 2 - 4 * $this->getA() * $this->getC());
    }

    public function getRoot1($del)
    {
        return (-$this->b + pow($del, 0.5)) / (2 * $this->a);
    }

    public function getRoot2($del)
    {
        return (-$this->b - pow($del, 0.5)) / (2 * $this->a);
    }

    public function root()
    {
        $delta = $this->getDricriminat();
        if ($delta > 0) {
            return '<br> phuong trinh co nghiem x1= ' . $this->getRoot1($delta) . ' and x2 = ' . $this->getRoot2($delta);
        } elseif ($delta == 0) {
            return '<br> phuong trinh co nghiem kep x1=x2= ' . $this->getRoot1($delta);
        } else {
            return '<br> phuong trinh vo nghiem';
        }
    }
}