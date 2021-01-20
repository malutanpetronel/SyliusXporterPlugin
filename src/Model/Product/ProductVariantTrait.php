<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Product;

trait ProductVariantTrait
{
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function getTracked(): ?bool
    {
        return $this->tracked;
    }

    public function getShippingRequired(): ?bool
    {
        return $this->shippingRequired;
    }
}
