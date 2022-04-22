<?php

namespace oirancage\anyblocks;

use pocketmine\block\UnknownBlock;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;

class EventListener implements Listener
{
    public function onInteract(PlayerInteractEvent $event){
        if($event->getAction() !== PlayerInteractEvent::RIGHT_CLICK_BLOCK && !$event->getPlayer()->isCreative(true)){
            return;
        }
        // Right click when player is creative only.
        $block = $event->getItem()->getBlock();
        if(!$block instanceof UnknownBlock){
            return;
        }
        // Unknown Block only.
        $touchedBlockPosition = $event->getBlock()->getPosition();
        $positionToPlace = $touchedBlockPosition->getSide($event->getFace());
        $touchedBlockPosition->getWorld()->setBlock($positionToPlace, $block);
    }
}