<?php
/**
 * File: app/tests/UserTest.php
 *
 * PHP version 5
 *
 * @category Tests
 * @package  Tests/User
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe=fleischlos.de
 */
use Zizaco\FactoryMuff\Facade\FactoryMuff;
/**
 * Class: UserTest
 *
 * @category Tests
 * @package  Tests/User
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MTI http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
class UserTest extends TestCase
{
    /**
     * Name: Creating A User (white)
     *
     * @return void
     */
    public function testCreatingAUserWhite()
    {
        $user = FactoryMuff::create('User');
        $user->save();
    }

    /**
     * Name: Navigate to user profile
     *
     * @return void
     */
    public function testNavigateToUserProfile()
    {
        $user = FactoryMuff::create('User');
        $user->save();

        $this->call('GET', 'api/profile/' . $user->id);

        $this->assertResponseOk();
    }
}
