<?php

class StopWatch
{
private $startTime;
private $endTime;

    /**
     * @param $startTime
     * @param $endTime
     */
    public function __construct()
    {
        $this->startTime = microtime();

    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

public function setTime(){
       return $this->startTime =microtime();
}
public function restartTime(){
        return $this->endTime = microtime();
}
public function getElapsedTime() {
       return $this->endTime - $this->startTime;
}
}