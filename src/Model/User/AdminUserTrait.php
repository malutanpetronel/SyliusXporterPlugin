<?php

namespace Aquis\XporterPlugin\Model\User;

trait AdminUserTrait
{
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setSalt(?string $salt): void
    {
        $this->salt = $salt;
    }
}
