<?php

declare(strict_types=1);

namespace juqndev\crates\event\player;

use juqndev\crates\tile\types\CrateTile;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;

/**
 * Class PlayerEvent
 * @package juqndev\crates\event\player
 */
class PlayerEvent implements Listener
{

    /**
     * @param PlayerInteractEvent $event
     */
    public function handleInteract(PlayerInteractEvent $event): void
    {
        $action = $event->getAction();
        $block = $event->getBlock();
        $player = $event->getPlayer();

        $tile = $player->getLevel()->getTile($block);

        if (!$tile instanceof CrateTile)
            return;
        $event->setCancelled();

        if ($action == $event::RIGHT_CLICK_BLOCK) {
            // open chest
        } elseif ($action == $event::LEFT_CLICK_BLOCK) {
            // give reward
        }
    }
}