<?php

namespace AusiDevelopmentPM\DsgvoForm;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    private static Main $instance;

    public function onEnable(): void {
        self::$instance = $this;
    }

    public static function getInstance(): Main
    {
        return self::$instance;
    }
}