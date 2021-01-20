<?php

namespace Aquis\XporterPlugin\Model\User;

use Sylius\Component\User\Model\UserOAuthInterface;

trait ShopUserTrait
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

    public function setEmail(?string $email): void
    {
        if (null === $this->customer) {
            return;
        }

        $this->customer->setEmail($email);
    }

    public function setEmailCanonical(?string $emailCanonical): void
    {
        if (null === $this->customer) {
            return;
        }

        $this->customer->setEmailCanonical($emailCanonical);
    }

    public function removeOauthAccount(UserOAuthInterface $oauth): void
    {
        $this->oauthAccounts->removeElement($oauth);
    }
}
