<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Taxation;

trait TaxRateTrait
{
    public function getIncludedInPrice(): ?bool
    {
        return $this->includedInPrice;
    }
}
