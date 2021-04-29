<?php

declare(strict_types=1); # Bruh

namespace juqndev\crates;

use juqndev\crates\event\EventHandler;
use juqndev\crates\tile\TileHandler;
use pocketmine\plugin\PluginBase;

/**
 * Class Loader
 * @package juqndev\crates
 */
class Loader extends PluginBase
{

    /** @var Loader */
    private static Loader $instance;

    /** @var EventHandler */
    private static EventHandler $eventHandler;
    /** @var TileHandler */
    private static TileHandler $tileHandler;

    public function onLoad()
    {
        self::$instance = $this;
    }

    public function onEnable()
    {
        # Config
        $this->saveResource('config.yml');
        $this->saveResource('crates.yml');

        # Handlers
        self::$eventHandler = new EventHandler();
        self::$eventHandler->execute();

        self::$tileHandler = new TileHandler();
        self::$tileHandler->execute();
    }

    /**
     * @return Loader
     */
    public static function getInstance(): Loader
    {
        return self::$instance;
    }
}