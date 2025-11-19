<?php

namespace  ByTIC\World\Countries\Models;

use Nip\Records\Record;

/**
 * @property string $name
 * @property string $code2
 * @property string $code3
 */
trait CountryTrait
{

    public function getName()
    {
        return $this->getPropertyRaw('name');
    }

    /**
     * @return string
     */
    public function getFlagUrl(): string
    {
        return 'https://www.countryflags.io/' . strtolower($this->code2) . '/flat/32.png';
    }

    /**
     * @return string
     */
    public function getFlagImage(): string
    {
        return '<img src="'. $this->getFlagUrl().'"
                         alt="'. $this->name.'"
                         title="'. $this->name.'" style="vertical-align:middle;"/>';
    }
}
