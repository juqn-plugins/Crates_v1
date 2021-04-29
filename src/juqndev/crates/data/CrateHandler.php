<?php

declare(strict_types=1);

namespace juqndev\crates\data;

/**
 * Class CrateHandler
 * @package juqndev\crates\data
 */
class CrateHandler
{

    /** @var Crate[] */
    private array $creates = [];

    /**
     * @return Crate[]
     */
    public function getCreates(): array
    {
        return $this->creates;
    }
}