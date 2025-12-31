<?php

namespace ByTIC\World\Countries\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\HasSubject\HasSubject;

/**
 * @method \ByTIC\World\Countries\Models\Country getSubject()
 */
class CountryFlagImg extends Action
{
    use HasSubject;

    public const SIZE_XS = '20';
    public const SIZE_S = '40';
    public const SIZE_M = '60';

    public function html(): string
    {
        $country = $this->getSubject();
        $return = '<img src="' . $this->url(self::SIZE_XS) . '"
  srcset="' . $this->url(self::SIZE_M) . ' 2x, ' . $this->url(self::SIZE_M) . ' 3x"
  height="20"  alt="' . $country->getName() . '">';
        return $return;
    }

    public function url($size = self::SIZE_XS): string
    {
        return 'https://flagcdn.com/h' . $size . '/' . strtolower($this->getSubject()->code2) . '.png';
    }
}

