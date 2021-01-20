<?php

namespace Aquis\XporterPlugin\Model\Promotion;

trait PromotionTrait
{
    public function getExclusive()
    {
        return $this->exclusive;
    }

    public function getCouponBased()
    {
        return $this->couponBased;
    }
}
