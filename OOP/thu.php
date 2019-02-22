<?php
declare(strict_types=1);
namespace Brick\DateTime;
/**
 * Measures the time elapsed.
 */
class Stopwatch
{
    
    private $clock;
    
    private $duration;
    
    private $startTime;
    
    public function __construct(Clock $clock = null)
    {
        if ($clock === null) {
            $clock = DefaultClock::get();
        }
        $this->clock    = $clock;
        $this->duration = Duration::zero();
    }
    
    public function start() : void
    {
        if ($this->startTime === null) {
            $this->startTime = $this->clock->getTime();
        }
    }
    
    public function stop() : void
    {
        if ($this->startTime === null) {
            return;
        }
        $endTime = $this->clock->getTime();
        $duration = Duration::between($this->startTime, $endTime);
        $this->duration = $this->duration->plus($duration);
        $this->startTime = null;
    }
    
    public function getStartTime() : ?Instant
    {
        return $this->startTime;
    }
    
    public function isRunning() : bool
    {
        return $this->startTime !== null;
    }
   
    public function getElapsedTime() : Duration
    {
        if ($this->startTime === null) {
            return $this->duration;
        }
        return $this->duration->plus(Duration::between($this->startTime, $this->clock->getTime()));
    }
}