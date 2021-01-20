<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Channel;

trait ChannelTrait
{
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function getSkippingShippingStepAllowed(): ?bool
    {
        return $this->skippingShippingStepAllowed;
    }

    public function getSkippingPaymentStepAllowed(): ?bool
    {
        return $this->skippingPaymentStepAllowed;
    }

    public function getAccountVerificationRequired(): ?bool
    {
        return $this->accountVerificationRequired;
    }
}
