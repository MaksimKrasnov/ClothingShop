<?php

namespace App\Entity;

class Phone
{
    public ?string $phone;
    public function getName(): ?string
    {
        return $this->phone;
    }

    public function setName(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }
}
