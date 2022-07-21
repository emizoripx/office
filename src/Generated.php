<?php

namespace EmizorIpx\OfficePhp74;

class Generated
{
    /**
     * @var \EmizorIpx\OfficePhp74\Drivers\SaveInterface
     */
    public \EmizorIpx\OfficePhp74\Drivers\SaveInterface $driver;

    /**
     * Handle template's saving
     *
     * @var \Closure(\EmizorIpx\OfficePhp74\Drivers\SaveInterface $driver, \EmizorIpx\OfficePhp74\Format $format)
     */
    protected ?\Closure $hookSave = null;

    /**
     * @param \EmizorIpx\OfficePhp74\Drivers\SaveInterface $driver
     * @return void
     */
    public function __construct(\EmizorIpx\OfficePhp74\Drivers\SaveInterface $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Save generated document to the buffer
     *
     * @param \EmizorIpx\OfficePhp74\Format $format
     * @return string
     */
    public function save( $format): string
    {
        ob_start();

        if ($this->hookSave) {
            ($this->hookSave)($this->driver, $format);
        } else {
            $this->driver->save('php://output', $format);
        }

        return ob_get_clean();
    }

    /**
     * Save generated document to the file
     *
     * @param string $filename
     * @param \EmizorIpx\OfficePhp74\Format $format
     * @return int|NULL
     */
    public function saveAs(string $filename, $format = null): ?int
    {
        if (! $format) {
            $format = Format::from(mb_strtolower(pathinfo($filename, PATHINFO_EXTENSION)));
        }

        return file_put_contents($filename, $this->save($format));
    }

    /**
     * Set hookSave
     *
     * @param ?\Closure $closure
     * @return self
     */
    public function hookSave(?\Closure $closure): self
    {
        $this->hookSave = $closure;

        return $this;
    }
}
