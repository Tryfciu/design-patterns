<?php

declare(strict_types=1);

interface Memento
{
    public function getCreationDate(): DateTimeImmutable;
}
