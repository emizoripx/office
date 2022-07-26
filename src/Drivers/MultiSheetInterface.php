<?php

namespace EmizorIpx\OfficePhp74\Drivers;

interface MultiSheetInterface
{
    /**
     * Set active sheet
     *
     * @param int $index
     * @return self
     */
    public function setSheet(int $index): self;

    /**
     * Get sheets count
     *
     * @return int
     */
    public function getSheetCount(): int;
}
