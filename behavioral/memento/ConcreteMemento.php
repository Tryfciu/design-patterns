<?php

declare(strict_types=1);

class ConcreteMemento implements Memento
{
    private DateTimeImmutable $creationDate;
    private int $accountBalance;

    public function __construct(int $accountBalance)
    {
        $this->creationDate = new DateTimeImmutable();
        $this->accountBalance = $accountBalance;
    }

    public function getAccountBalance(): int
    {
        return $this->accountBalance;
    }

    public function getCreationDate(): DateTimeImmutable
    {
        return $this->creationDate;
    }
}
