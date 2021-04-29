<?php

declare(strict_types=1);

namespace juqndev\crates\data;

use pocketmine\item\Item;

/**
 * Class Crate
 * @package juqndev\crates\data
 */
class Crate
{

    /** @var string */
    private string $name;
    /** @var Item[] */
    private array $items;
    /** @var string */
    private string $text;
    /** @var array|null */
    private ?array $textParticles;

    /**
     * Crate constructor.
     * @param string $name
     * @param array $items
     * @param string $text
     * @param array|null $textParticles
     */
    public function __construct(string $name, array $items, string $text, array $textParticles = null)
    {
        $this->name = $name;
        $this->items = $items;
        $this->text = $text;
        $this->textParticles = $textParticles;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return array|null
     */
    public function getTextParticles(): ?array
    {
        return $this->textParticles;
    }
}