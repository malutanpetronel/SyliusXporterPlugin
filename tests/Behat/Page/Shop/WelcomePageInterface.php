<?php

declare(strict_types=1);

namespace Tests\Aquis\XporterPlugin\Behat\Page\Shop;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;

interface WelcomePageInterface extends SymfonyPageInterface
{
    /**
     * @return string
     */
    public function getGreeting(): string;
}