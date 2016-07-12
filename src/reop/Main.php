<?php
namespace reop;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener as L;
use pocketmine\Player;
use pocketmine\plugin\PluginBase as PB;
use pocketmine\Server;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config;

class Main extends PB implements L{
    
    public function onLoad(){
        $this->getLogger()->info(TF::GREEN . "REOP");
    }

    public function onEnable(){
        @mkdir($this->getDataFolder());
        $this->saveResource("ops.yml");
        $Config = new Config($this->getdatafolder() . "ops.yml", Config::YAML);
        $this->getLogger()->info(TF::GREEN . "REOP Enabled!");
        $this->getServer()->registerEvents($this, $this);
    }

    public function onDisable(){
        $this->getLogger()->info(TF::RED. "REOP Disabled!");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if(!$sender instanceof Player){
            $sender->sendmessgase("Please use this command in-game");
            return;
        }

        switch($cmd->getName()){
            case "reop":
                $player = strtolower($sender->getName());
                if($Config->exists($player));
                $sender->sendmessage("Works");
            }
        }
    }
}
