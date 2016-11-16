<?php

return [
    'install' => function ($app) {

        $util = $app['db']->getUtility();

        if ($util->tableExists('@products') === false) {
            $util->createTable('@products', function ($table) {
                $table->addColumn('id', 'integer', ['unsigned' => true, 'length' => 10, 'autoincrement' => true]);
                $table->addColumn('sku', 'string', ['length' => 255, 'default' => '']);
                $table->addColumn('name', 'string', ['length' => 255, 'default' => '']);
                $table->addColumn('description', 'string', ['length' => 255, 'default' => '']);
                $table->addColumn('price', 'integer');
                $table->addColumn('url', 'string', ['length' => 255, 'default' => '']);
                $table->setPrimaryKey(['id']);
            });
        }
    }
];
