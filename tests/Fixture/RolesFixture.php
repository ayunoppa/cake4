<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'fc32f729-095f-41bb-b9ea-0e3b19271e67',
                'name' => 'Lorem ipsum dolor sit amet',
                'memo' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-05-22 11:53:37',
                'modified' => '2022-05-22 11:53:37',
            ],
        ];
        parent::init();
    }
}
