<?php
class  QuadraticEquation{
    private  $a;
    private  $b;
    private  $c;

    public function __construct(string $a, string $b, string $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return string
     */
    public function getA(): string
    {
        return $this->a;
    }

    /**
     * @return string
     */
    public function getB(): string
    {
        return $this->b;
    }

    /**
     * @return string
     */
    public function getC(): string
    {
        return $this->c;
    }

    public function getDiscriminant() {
        return ($this->GetB() * $this->GetB()) - ( 4 * $this->GetA() * $this->GetC());
    }
    public function getRoot1() {
        return $root1 = $this->GetB() + sqrt($this->getDiscriminant()) / ( 2 * $this->GetA());
    }
    public  function  getRoot2(){
        return $root2 =  $this->GetB() - sqrt($this->getDiscriminant()) / ( 2 * $this->GetA());
    }
}

