<?php

declare(strict_types=1);

namespace juqndev\crates\event;

use juqndev\crates\event\player\PlayerEvent;
use juqndev\crates\Loader;

/**
 * Class EventHandler
 * @package juqndev\crates\event
 */
class EventHandler
{

    public function execute(): void
    {
        Loader::getInstance()->getServer()->getPluginManager()->registerEvents(new PlayerEvent(), Loader::getInstance());
    }
}