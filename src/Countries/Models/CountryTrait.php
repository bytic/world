<?php

namespace  ByTIC\World\Countries\Models;


use ByTIC\World\Countries\Actions\CountryFlagImg;

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
        return CountryFlagImg::for($this)->url();
    }

    /**
     * @return string
     */
    public function getFlagImage(): string
    {
        return CountryFlagImg::for($this)->html();
    }

    public function getCode2(): ?string
    {
        return $this->getPropertyRaw('code2');
    }

    public function getCode3(): ?string
    {
        return $this->getPropertyRaw('code3');
    }
}
