<?php

declare(strict_types=1);

namespace juqndev\crates\tile\types;

use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\tile\Chest;

/**
 * Class CrateTile
 * @package juqndev\crates\tile\types
 */
class CrateTile extends Chest
{

    /** @var string|null */
    private ?string $crateName;

    /**
     * CrateTile constructor.
     * @param Level $level
     * @param CompoundTag $nbt
     * @param null $crateName
     */
    public function __construct(Level $level, CompoundTag $nbt, $crateName = null)
    {
        $this->crateName = $crateName;
        parent::__construct($level, $nbt);
    }

    /**
     * @return string|null
     */
    public function getCrateName(): ?string
    {
        return $this->crateName;
    }
}