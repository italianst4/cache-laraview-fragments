<?php

namespace Hkp22\Tests\CacheLaraViewFragments;

use Illuminate\Database\Capsule\Manager as DB;
use Hkp22\Tests\CacheLaraViewFragments\Stubs\Models\Post;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->setUpDatabase();
        $this->migrateTables();
    }

    protected function setUpDatabase()
    {
        $database = new DB;
        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);

        $database->bootEloquent();
        $database->setAsGlobal();
    }

}
