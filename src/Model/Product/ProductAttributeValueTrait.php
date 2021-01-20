<?php

namespace Aquis\XporterPlugin\Model\Product;

trait ProductAttributeValueTrait
{
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function setBoolean(?bool $boolean): void
    {
        $this->boolean = $boolean;
    }

    public function setInteger(?int $integer): void
    {
        $this->integer = $integer;
    }

    public function setFloat(?float $float): void
    {
        $this->float = $float;
    }

    /**
     * @param \DateTimeInterface $datetime
     */
    public function setDatetime(?\DateTimeInterface $datetime): void
    {
        $this->datetime = $datetime;
    }

    public function setDate(?\DateTimeInterface $date): void
    {
        $this->date = $date;
    }

    public function setJson(?array $json): void
    {
        $this->json = $json;
    }
}
