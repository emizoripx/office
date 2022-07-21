<?php

namespace EmizorIpx\OfficePhp74\Drivers;

interface LoadInterface
{
    /**
     * Load a template with specific format
     *
     * @param string $file
     * @param \EmizorIpx\OfficePhp74\Format $format
     * @return self
     */
    public function load(string $file, $format): self;
}
