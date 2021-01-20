<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Model\Taxonomy;

use  App\Entity\Taxonomy\Taxon;

trait TaxonTrait
{
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setRoot(?Taxon $root): void
    {
        $this->root = $root;
    }

    public function __toString(): string
    {
        return (string) '';
    }
}
