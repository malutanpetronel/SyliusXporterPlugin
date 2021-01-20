<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Payment;

trait PaymentMethodTrait
{
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
}
