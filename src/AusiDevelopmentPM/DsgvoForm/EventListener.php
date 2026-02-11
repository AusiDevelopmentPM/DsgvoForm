<?php

namespace AusiDevelopmentPM\DsgvoForm;

use AusiDevelopmentPM\DsgvoForm\tasks\OpenFormTask;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener implements Listener {

    public function onJoin(PlayerJoinEvent $ev): void
    {
        $p = $ev->getPlayer();

        Main::getInstance()->getScheduler()->scheduleDelayedTask(new OpenFormTask($p), 20 * 6);
    }

}