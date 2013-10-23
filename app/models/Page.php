<?php
/**
 * File: app/models/Page.php
 *
 * PHP version 5
 *
 * @category Models
 * @package  Models/Page
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */

/**
 * Class: Page
 *
 * @category Models
 * @package  Models/Page
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
class Page extends \LaravelBook\Ardent\Ardent
{
    protected $softDelete = true;

    public static $rules = array(
        'title'    =>    'required|alpha_num',
    );

    public static $factory = array(
        'title'    =>    'string'
    );
}
