<?php
class StopWatch {
    private static $batDau = array();
    public static function start($ten = 'default') {
        self::$batDau[$ten] = microtime(true);
    }
    public static function troi($ten = 'default') {
        return microtime(true) - self::$batDau[$ten];
    }
}
StopWatch::start();
sleep(0.0001);
echo 'Thời gian đã trôi qua: ' . StopWatch::troi() . ' seconds';