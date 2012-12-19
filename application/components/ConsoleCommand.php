<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yakovlev
 * Date: 10.12.12
 * Time: 14:01
 */

/**
 * Максимальное время выполнения
 */
error_reporting(E_ALL);
set_time_limit(0);

class ConsoleCommand extends CConsoleCommand {
    private $log;
    private $consoleNextLine = true;
    public function write2Console($text, $nextLine = true, $skipWrite2Log = false) {
        $output = ($this->consoleNextLine ? date('[H:m:s] ' ) : '') .  $text . ($nextLine ? "\n" : '');
        echo $output;
        if (!$skipWrite2Log)
            $this->log .= $output;

        $this->consoleNextLine = $nextLine;
    }

    /**
     * Write log
     */
    public function writeLog2File($file) {
        file_put_contents($file, $this->log);
    }
    /**
     * @return CDbConnection
     */
    public function getDB() {
        return Yii::app()->db;
    }
}
