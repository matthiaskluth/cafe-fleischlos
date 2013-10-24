<?php
/**
 * File: app/models/User.php
 *
 * PHP version 5
 *
 * @category Models
 * @package  Models/User
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */

/**
 * Class: User
 *
 * @category Models
 * @package  Models/User
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
class User extends \LaravelBook\Ardent\Ardent
{
    public $autoPurgeRedundantAttributes = true;
    public static $passwordAttributes = array('password');

    public static $factory = array(
        'username'              =>    'string',
        'email'                 =>    'email',
        'password'              =>    'abc123',
        'password_confirmation' =>    'abc123',
    );

    /*public static $rules = array(
        'username'              =>    'required|alpha',
        'email'                 =>    'required|email',
        'password'              =>    'required|alpha_num|between:6,32|confirmed',
        'password_confirmation' =>    'required|alpha_num|between:6,32'
    );*/
}
