<?php

namespace ByTIC\World\Countries\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\HasSubject\HasSubject;

/**
 * @method \ByTIC\World\Countries\Models\Country getSubject()
 */
class CountryBadge extends Action
{
    use HasSubject;

    public function compact()
    {
        $country = $this->getSubject();
        $return = '<div class="country-badge badge text-bg-light" title="' . $country->name . '">';
        $return .= CountryFlagImg::for($country)->html();
        $return .= '<span class="country-name ms-1">' . $country->getCode3() . '</span>';
        $return .= '</div>';
        return $return;
    }
}

