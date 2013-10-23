<?php
/**
 * File: app/models/Comment.php
 *
 * PHP version 5
 * 
 * @category Models
 * @package  Models/Comment
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */

/**
 * Class: Comment
 *
 * @category Models
 * @package  Models/Comment
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de 
 */
class Comment extends \LaravelBook\Ardent\Ardent
{
    public static $factory = array(
        'subject'    =>    'string',
        'content'    =>    'text',
        'email'      =>    'email',
        'post_id'    =>    0
    );

    public static $relationsData = array(
        'post'       =>    array(
            self::BELONGS_TO, 'Post'
        )
    );
}
