<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Order;

use Doctrine\Common\Collections\ArrayCollection;
use Sylius\Component\Order\Model\OrderItemInterface;

trait OrderItemUnitTrait
{
//    public function setOrderItem(OrderItemInterface $orderItem)
//    {
//        $this->orderItem = $orderItem;
//        $this->orderItem->addUnit($this);
//    }

    /**
     * @param mixed $adjustmentsTotal
     */
    public function setAdjustmentsTotal($adjustmentsTotal): void
    {
        $this->adjustmentsTotal = $adjustmentsTotal;
    }
}
