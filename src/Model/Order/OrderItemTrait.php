<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Order;

trait OrderItemTrait
{
    public function getUnitsTotal()
    {
        return $this->unitsTotal;
    }

    public function setUnitsTotal(int $unitsTotal): void
    {
        $this->unitsTotal = $unitsTotal;
    }

    public function getImmutable()
    {
        return $this->immutable;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
//
    /**
     * @param mixed $adjustmentsTotal
     */
    public function setAdjustmentsTotal($adjustmentsTotal): void
    {
        $this->adjustmentsTotal = $adjustmentsTotal;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }
}
