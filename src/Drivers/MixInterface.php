<?php

namespace EmizorIpx\OfficePhp74\Drivers;

interface MixInterface extends MultiSheetInterface
{
    /**
     * Set title for an active sheet
     *
     * @param string $title
     * @return self
     */
    public function setSheetTitle(string $title): self;

    /**
     * Get title of an active sheet
     *
     * @return string
     */
    public function getSheetTitle(): string;

    /**
     * Merge (union) a sheet from another instanceof of driver
     *
     * @param \EmizorIpx\OfficePhp74\Drivers\MixInterface $driver
     * @return self
     */
    public function mergeDriver(\EmizorIpx\OfficePhp74\Drivers\MixInterface $driver): self;
}
