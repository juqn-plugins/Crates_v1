<?php

declare(strict_types=1); # Bruh

namespace juqndev\crates;

use pocketmine\plugin\PluginBase;

/**
 * Class Crates
 * @package juqndev\crates
 */
class Crates extends PluginBase
{

    /** @var Crates */
    private static Crates $instance;

    public function onLoad()
    {
        self::$instance = $this;
    }

    /**
     * @return Crates
     */
    public static function getInstance(): Crates
    {
        return self::$instance;
    }
}