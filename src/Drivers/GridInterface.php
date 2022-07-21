<?php

namespace EmizorIpx\OfficePhp74\Drivers;

interface GridInterface extends SaveInterface
{
    /**
     * Create new document
     *
     * @return self
     */
    public function create(): self;

    /**
     * Set data
     *
     * @param iterable $data
     * @return self
     */
    public function setGrid(iterable $data): self;
}
