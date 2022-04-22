<?php

namespace oirancage\anyblocks;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    protected function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }
}