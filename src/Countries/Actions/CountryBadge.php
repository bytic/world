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
        $return = '<div class="country-badge" title="' . $country->name . '">';
        $return .= '<img src="' . $country->getFlagUrl() . '" alt="' . $country->name . '" class="country-flag" />';
        $return .= '<span class="country-name">' . $country->getCode3() . '</span>';
        $return .= '</div>';
        return $return;
    }
}

