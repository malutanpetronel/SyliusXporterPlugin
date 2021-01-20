<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Order;

use Sylius\Component\Order\Model\OrderInterface;
use Sylius\Component\Order\Model\OrderItemUnitInterface;

trait AdjustmentTrait
{
    public function getNeutral()
    {
        return $this->neutral;
    }

    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param bool $locked
     */
    public function setLocked($locked): void
    {
        $this->locked = $locked;
    }

    /**
     * @param OrderItemUnitInterface|null $orderItemUnit
     */
    public function setOrderItemUnit(OrderItemUnitInterface $orderItemUnit)
    {
        $this->orderItemUnit = $orderItemUnit;
    }

    /**
     * @param OrderInterface|null $order
     */
    public function setOrder(OrderInterface $order)
    {
        $this->order = $order;
    }
}
