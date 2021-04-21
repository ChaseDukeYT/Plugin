<?php

namespace youtube;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
      
use pocketmine\command\CommandSender;

class Main extends PluginBase
{
    public function onLoad()
    {
        $sender->sendMessage("§4Youtube§r§1Plugin Ready");
    }

    public function onEnable()
    {
        /** code */
    }

    public function onDisable()
    {
        /** code */
    }
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
  switch($cmd->getName()) { 
    case "yt": 
      $sender->sendMessage("1000 Subscribers Needed!"); 
    break; 
  }
  return true;
}
}
