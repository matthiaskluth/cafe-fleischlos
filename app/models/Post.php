<?php
/**
 * File: app/models/Post.php
 *
 * PHP version 5
 * 
 * @category Models
 * @package  Models/Post
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */

/**
 * Class: Post
 * 
 * @category Models
 * @package  Models/Post
 * @author   Matthias Kluth <matthias@kluth.me>
 * @license  MIT http://opensource.org/licenses/MIT
 * @link     http://www.cafe-fleischlos.de
 */
class Post extends \LaravelBook\Ardent\Ardent
{
    public static $factory = array(
        'title'    =>    'string',
        'slug'     =>    'string',
        'content'  =>    'text',
        'image'    =>    'string',
        'author_id'=>    'factory|User',
    );

    public static $relationsData = array(
        'comments'    =>    array(
            self::HAS_MANY, 'Comment'
        )
    );
}
