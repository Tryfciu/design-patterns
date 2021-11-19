<?php

declare(strict_types=1);

class Originator
{
    private string $name;
    private int $accountBalance;

    public function __construct(string $name, int $accountBalance)
    {
        $this->name = $name;
        $this->accountBalance = $accountBalance;
    }

    public function increaseAccountBalance(int $amount): void
    {
        $this->accountBalance += $amount;
    }

    public function save(): ConcreteMemento {
        return new ConcreteMemento($this->accountBalance);
    }

    public function restore(ConcreteMemento $memento): void {
        $this->accountBalance = $memento->getAccountBalance();
    }
}
