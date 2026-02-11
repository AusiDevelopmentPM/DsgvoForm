<?php

namespace AusiDevelopmentPM\DsgvoForm\tasks;

use AusiDevelopmentPM\DsgvoForm\forms\DsgvoForm;
use pocketmine\player\Player;
use pocketmine\scheduler\Task;

class OpenFormTask extends Task {

    private Player $player;

    public function __construct(Player $player) {
        $this->player = $player;
    }

    public function onRun(): void
    {
        $this->player->sendForm((new DsgvoForm($this->player))->openDsgvoForm());
    }

}