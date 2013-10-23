<?php
/**
 * File: app/tests/TestCase.php
 *
 * PHP version 5
 *
 * @category Tests
 * @package  Tests/TestCase
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */

/**
 * Class: TestCase
 *
 * @category Tests
 * @package  Tests/TestCase
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $unitTesting = true;

        $testEnvironment = 'testing';

        return include __DIR__.'/../../bootstrap/start.php';
    }

    /**
     * Migrates the database and set the mailer to 'pretend'.
     * This will cause the tests to run quickly.
     *
     * @return void
     */
    private function _prepareForTests()
    {
        Artisan::call('migrate');
        Mail::pretend(true);
    }

    /**
     * Default preparation for each test
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp(); 
        $this->_prepareForTests();
    }
}
