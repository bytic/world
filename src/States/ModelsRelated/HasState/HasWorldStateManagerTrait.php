<?php

namespace ByTIC\World\States\ModelsRelated\HasState;

use ByTIC\World\Utility\WorldModels;

trait HasWorldStateManagerTrait
{
    public const RELATION_WORLD_STATE = 'WorldState';

    protected function initRelations(): void
    {
        parent::initRelations();
        $this->initRelationsWorldRelations();
    }

    protected function initRelationsWorldRelations(): void
    {
        $this->initRelationsWorldStateRelation();
    }

    /**
     * @inheritDoc
     */
    protected function initRelationsWorldStateRelation()
    {
        $this->initRelation(
            'belongsTo',
            self::RELATION_WORLD_STATE,
            array_merge(
                ['class' => WorldModels::statesClass()],
                $this->worldStateParams()
            )
        );
    }

    protected function worldStateParams(): array
    {
        return ['withPK' => 'iso3166_2', 'fk' => 'state'];
    }
}
