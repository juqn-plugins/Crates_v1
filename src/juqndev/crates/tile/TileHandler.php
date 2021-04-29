<?php

declare(strict_types=1);

namespace juqndev\crates\tile;

use juqndev\crates\tile\types\CrateTile;
use pocketmine\tile\Tile;

/**
 * Class TileHandler
 * @package juqndev\crates\tile
 */
class TileHandler
{

    /**
     *
     */
    public function execute()
    {
        Tile::registerTile(CrateTile::class);
    }
}