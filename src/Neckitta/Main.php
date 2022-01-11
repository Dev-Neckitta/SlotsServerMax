<?php

namespace Neckitta;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class Main extends PluginBase implements Listener{
                public function onEnable(){
                $this->getServer()->getPluginManager()->registerEvents($this, $this);
          }
                public function onInrinitySlots(QueryRegenerateEvent $event){
                $event->setMaxPlayerCount($event->getPlayerCount() + 1);
    }
}
