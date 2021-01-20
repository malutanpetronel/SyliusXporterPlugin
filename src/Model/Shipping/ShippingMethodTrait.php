<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Shipping;

trait ShippingMethodTrait
{
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
}
