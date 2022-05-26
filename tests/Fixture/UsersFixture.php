<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => '833fede8-86ef-4b41-b177-6ca9de02ed6e',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'role_id' => '384488c5-4489-414e-90ad-09dc0703bf52',
                'created' => '2022-05-22 12:42:12',
                'modified' => '2022-05-22 12:42:12',
            ],
        ];
        parent::init();
    }
}
