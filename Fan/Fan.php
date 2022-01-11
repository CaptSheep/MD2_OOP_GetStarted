<?php

class Fan
{
    private $speed;
private $slow;
private $medium;
private $fast;
private $on;
private $radius;
private $color;

    /**
     * @param $speed
     * @param $slow
     * @param $medium
     * @param $fast
     * @param $on
     * @param $radius
     * @param $color
     */
    public function __construct()
    {
        $this->speed = $this->slow;
        $this->slow = 1;
        $this->medium = 2;
        $this->fast = 3;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSlow(): int
    {
        return $this->slow;
    }

    /**
     * @param int $slow
     */
    public function setSlow(int $slow): void
    {
        $this->slow = $slow;
    }

    /**
     * @return int
     */
    public function getMedium(): int
    {
        return $this->medium;
    }

    /**
     * @param int $medium
     */
    public function setMedium(int $medium): void
    {
        $this->medium = $medium;
    }

    /**
     * @return int
     */
    public function getFast(): int
    {
        return $this->fast;
    }

    /**
     * @param int $fast
     */
    public function setFast(int $fast): void
    {
        $this->fast = $fast;
    }

    /**
     * @return false
     */
    public function getOn(): bool
    {
        return $this->on;
    }

    /**
     * @param false $on
     */
    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    function toString(){
        if($this->on){
            return "Mau quat la : " . $this->getColor() . "<br>".  " Quat co toc do la : " . $this->getSpeed()  . "<br>" . " Quat co ban kinh la : " . $this->getRadius() . "<br>" . " Trang thai cua quat la " . "fan is off";
        }
        else{
            return "Mau quat la : " . $this->getColor() . " <br>". " Quat co toc do la : " . $this->getSpeed()  . "<br>".  " Quat co ban kinh la : " . $this->getRadius() . "<br>" . "Trang thai cuq quat la :" . "fan is on";
        }
    }
}