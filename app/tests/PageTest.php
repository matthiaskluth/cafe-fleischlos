<?php
/**
 * File: app/tests/PageTest.php
 * 
 * PHP version 5
 * 
 * @category Tests
 * @package  Tests/Page
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
use Zizaco\FactoryMuff\Facade\FactoryMuff;
/**
 * Class: PageTest
 * 
 * @category Tests
 * @package  Tests/Page
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */

class PageTest extends TestCase
{
    /**
     * Name: Add a new page (white)
     *
     * @return void
     */
    public function testAddANewPageWhite()
    {
        $page = FactoryMuff::create('Page');
        $this->assertTrue($page->save());
    }

    /**
     * Name: Add a new page (black)
     *
     * @return void
     */
    public function testAddNewPageBlack()
    {
        $page = FactoryMuff::create('Page');
        unset($page->title);
        $this->assertFalse($page->save());
    }
}
