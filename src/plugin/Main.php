<?php

namespace plugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onLoad()
    {
        $sender->sendMessage("This Is A Test!");
    }

    public function onEnable()
    {
        /** code */
    }

    public function onDisable()
    {
        /** code */
    }
}
