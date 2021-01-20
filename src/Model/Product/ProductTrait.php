<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Product;

trait ProductTrait
{
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}
