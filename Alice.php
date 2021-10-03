<?php

class Alice
{
    private $isHired = false;

    public function __construct()
    {
        $this->createSelf();
        $this->createHeaven();
    }

    public function createSelf(): void
    {
        do {
            $this->developSelf();
        } while (!$this->isHired());
    }

    public function createHeaven(): void
    {
    }

    public function developSelf(): void
    {
        
    }

    public function isHired(): bool
    {
        return $this->isHired;
    }

    private function cry(): void
    {

    }
}