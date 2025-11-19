<?php

namespace ByTIC\World\Countries\ModelsRelated\HasCountry;

use ByTIC\World\Countries\Models\Country;

/**
 * @property int $id_country
 * @method Country getCountry()
 */
trait HasCountryRecordTrait
{

    public function populateFromCountry($country): self
    {
        $this->id_country = $country->id;
        $this->getRelation('Country')->setResults($country);
        return $this;
    }
}
