<?php

namespace EmizorIpx\OfficePhp74\Drivers;

interface SaveInterface
{
    /**
     * Save in specific format
     *
     * @param string $file
     * @param \EmizorIpx\OfficePhp74\Format $format
     * @return void
     */
    public function save(string $file, $format): void;
}
