<?php

namespace ByTIC\World\Countries\ModelsRelated\HasCountry;

use ByTIC\World\Utility\WorldModels;

trait HasCountryManagerTrait
{

    protected function initRelations(): void
    {
        parent::initRelations();
        $this->initRelationsWorldRelations();
    }

    protected function initRelationsWorldRelations(): void
    {
        $this->initRelationCountriesRelation();
    }

    /**
     * @inheritDoc
     */
    protected function initRelationCountriesRelation()
    {
        $this->initRelation('belongsTo', 'Country', ['class' => WorldModels::countriesClass(), 'fk' => 'id_country']);
    }
}
