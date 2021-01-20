<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Customer;

use Sylius\Component\Order\Model\OrderInterface;

trait CustomerTrait
{
    public function getSubscribedToNewsletter(): ?bool
    {
        return $this->subscribedToNewsletter;
    }

    /**`
     * @param OrderInterface|null $order
     */
    public function setOrderItemUnit(OrderInterface $order)
    {
        $this->order = $order;
    }

    public function addOrder(OrderInterface $order): void
    {
        if (!$this->hasOrder($order)) {
            $this->orders[] = $order;
        }
    }

    public function hasOrder(OrderInterface $order): bool
    {
        return $this->orders->contains($order);
    }

    public function removeOrder(OrderInterface $order): void
    {
        $this->orders->removeElement($order);
    }
}
