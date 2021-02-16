<?php


class StopWatch
{
    private $startTime;
    private $endTime;
    function __construct(){
        $this->startTime = time();
    }
    /**
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param int $startTime
     */
    public function setStartTime($time)
    {
        $this->startTime = $time;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($time)
    {
        $this->endTime = $time;
    }

    public function start()
    {
        $this->setStartTime();
    }

    public function stop()
    {
        $this->setEndTime();
        $this->getEndTime();
    }

    public function count()
    {
        echo "<br><br>";

        echo $this->endTime;
        echo "<br><br>";

        echo $this->startTime;
        echo "<br><br>";
        echo $this->endTime * 1000 - $this->startTime * 1000;

    }
}


