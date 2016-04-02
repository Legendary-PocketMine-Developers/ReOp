<?php
namespace reop;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
    
    public function onLoad(){
        $this->getLogger()->info(TextFormat::GREEN . "REOP");
    }
    public function onEnable(){
        $this->getLogger()->info(TextFormat::GREEN . "REOP ENABLED")
    }
    
    public function onDisable(){
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch ($command->getName()){
                $namesofpeople = $this->getConfig()->get("ReOp");
            /**
             *
             *                                         LOVE
             *
             **/
            case "reop":
                $this->getServer()->dispatchCommand("op" . $namesofpeople);
        }
    }
}
