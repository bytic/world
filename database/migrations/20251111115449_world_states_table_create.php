<?php

declare(strict_types=1);

use ByTIC\World\Utility\WorldModels;
use Phinx\Migration\AbstractMigration;

final class WorldStatesTableCreate extends AbstractMigration
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
        $tableName = \ByTIC\World\Utility\PackageConfig::tableName(WorldModels::WORLD_STATES);

        $table = $this->table($tableName, ['engine' => 'InnoDB', 'collation' => 'utf8mb4_unicode_ci'])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('native', 'string', ['limit' => 255])
            ->addColumn('country_code', 'char', ['limit' => 2])
            ->addColumn('fips_code', 'string', ['limit' => 255])
            ->addColumn('iso2', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('iso3166_2', 'string', ['limit' => 10])
            ->addColumn('type', 'string', ['limit' => 191])
            ->addColumn('level', 'integer', ['null' => true])
            ->addColumn('parent_id', 'integer', ['signed' => false, 'null' => true])
            ->addColumn('latitude', 'decimal', ['precision' => 10, 'scale' => 8, 'null' => true])
            ->addColumn('longitude', 'decimal', ['precision' => 11, 'scale' => 8, 'null' => true])
            ->addColumn('timezone', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('wikiDataId', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
            ]);
        $table->addIndex('country_code');
        $table->addIndex('parent_id');
        $table->save();

    }
}
