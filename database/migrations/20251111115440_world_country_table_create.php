<?php

declare(strict_types=1);

use ByTIC\World\Utility\PackageConfig;
use ByTIC\World\Utility\WorldModels;
use Phinx\Migration\AbstractMigration;

final class WorldCountryTableCreate extends AbstractMigration
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
        $tableName = PackageConfig::tableName(WorldModels::WORLD_COUNTRIES);

        if ($this->hasTable($tableName)) {
            return;
        }
        $table = $this->table($tableName, ['engine' => 'InnoDB', 'collation' => 'utf8mb4_unicode_ci'])
            ->addColumn('code2', 'char', ['limit' => 2])
            ->addColumn('code3', 'char', ['limit' => 3])
            ->addColumn('name', 'string', ['limit' => 255]);

        $table->addIndex('code2', ['unique' => true]);
        $table->addIndex('code3', ['unique' => true]);
        $table->save();
    }
}
