<?php

namespace AusiDevelopmentPM\DsgvoForm\forms;

use AusiDevelopmentPM\DsgvoForm\Main;
use dktapps\pmforms\ModalForm;
use pocketmine\player\Player;

class DsgvoForm
{

    private Player $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function openDsgvoForm(): ModalForm
    {
        return new ModalForm(
            "",
            "",

            function (Player $submitter, bool $choice): void {
                $submitter->sendMessage("Oke" . $choice);
            },
            "ACCEPT",
            "DECLINE"
        );
    }

}