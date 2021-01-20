<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Order;

trait OrderTrait
{
    /**
     * @param mixed $itemsTotal
     */
    public function setItemsTotal($itemsTotal): void
    {
        $this->itemsTotal = $itemsTotal;
    }

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
