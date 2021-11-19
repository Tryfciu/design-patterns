<?php

declare(strict_types=1);

class Caretaker
{
    private Originator $originator;
    /**
     * @var array<Memento> $snapshots
     */
    private array $snapshots;

    /**
     * @param array<Memento> $snapshots
     */
    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
        $this->snapshots = [];
    }

    public function getOriginator(): Originator
    {
        return $this->originator;
    }

    /**
     * @return Memento[]
     */
    public function getSnapshots(): array
    {
        return $this->snapshots;
    }

    public function addSnapshot(): void
    {
        $this->snapshots[] = $this->originator->save();
    }
}
