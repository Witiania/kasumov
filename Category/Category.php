<?php
declare(strict_types=1);
class Category
{
    private string $name;
    private bool $isActive;

    public function __construct(string $name, bool $isActive = true)
    {
        $this->name = $name;
        $this->isActive = $isActive;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setActive($isActive): void
    {
        $this->isActive = $isActive;
    }
}