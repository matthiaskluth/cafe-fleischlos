<?php
/**
 * File: app/tests/PostTest.php
 *
 * PHP version 5
 * 
 * @category Tests
 * @package  Tests/Post
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
use Zizaco\FactoryMuff\Facade\FactoryMuff;
/**
 * Class: PostTest
 *
 * @category Tests
 * @package  Tests/Post
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
class PostTest extends TestCase
{
    /**
     * Name: Get Comments
     *
     * @return void
     */
    public function testGetComments()
    {
        $post = FactoryMuff::create('Post');
        for ($i = 0; $i < 5;  $i++) {
            $post->comments[] = FactoryMuff::create('Comment');
        }

        $this->assertEquals(5, sizeof($post->comments));
    }
}
