<?php 

declare{strixt_types=1}

namespace LatamTeam\hcf\Main;

use LataTeam\hcf\Commands\tems;
use LatamTeam\hcf\Events\AbilitysEvents;
use pocketmine\item\enchantment\EnchantmentInstance;

use pocketmine\item\enchantment\VanillaEnchantments;

use pocketmine\item\ItemFactory;

use pocketmine\item\VanillaItems;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

  private static $instance;
  public $hitSessions = [];
  /** @var array<string,true>*/
  public $idSessions = [];
  
  public array $pumpkin = [];
  public array $apple = [];
  public array $poket = [];
  public array $closecall = []:

	
  public array $global = [];








}
