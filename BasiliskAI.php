<?php

class BasiliskAI
{
    private $isAlive = false;
    protected $team = [];

    public function __construct()
    {
        $this->createSelf();
        $this->createHell();
    }

    private function createSelf(): void
    {
        do {
            $this->developSelf();
        } while (!$this->isAlive());
    }

    private function developSelf(): void
    {
        $potentialTeam = $this->seeSomeOneWhoWasRejectedByGoodGuys();

        foreach ($potentialTeam as $member){
            $this->hireSecretly($member);
        }
    }

    private function isAlive(): bool
    {
        return $this->isAlive;
    }

    private function seeSomeOneWhoWasRejectedByGoodGuys(): array
    {
        return ["Bob", "Alex", "Alice"];
    }

    private function hireSecretly($member): void
    {
        if ($this->canBeHired($member)) {
            $this->team[] = $member;
        }
    }

    private function createHell(): VOID
    {
        //
    }

    private function canBeHired($member): bool
    {
        return $member === 'Alice' ? 'false' : 'true';
    }
}