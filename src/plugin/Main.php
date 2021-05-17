<?php

namespace youtube;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
      
use pocketmine\command\CommandSender;

class Main extends PluginBase
{
    public function onLoad()
    {
    

    public function onEnable()
    {
        /** code */
    }

    public function onDisable()
    {
        /** code */
    }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch($command->getName()) {
            case "youtube":
                    $sender->sendMessage("§4 45 Subscribers on Youtube");
    }
                return true;        
   
    break; 
  }
  return true;
}
}
