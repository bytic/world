<?php

declare(strict_types=1);

use ByTIC\World\Utility\PackageConfig;
use ByTIC\World\Utility\WorldModels;
use Phinx\Migration\AbstractMigration;

final class WorldStatesFkCountries extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $tableName = PackageConfig::tableName(WorldModels::WORLD_STATES);

        $table = $this->table($tableName)
            ->addForeignKey(
                'country_code',
                PackageConfig::tableName(WorldModels::WORLD_COUNTRIES),
                'code2',
                ['constraint' => 'world_states_country_code_countries', 'delete' => 'NO_ACTION', 'update' => 'NO_ACTION']
            );
        $table->save();
    }
}
