<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getFileName'))
{
    function getFileName()
    {
        $ci =& get_instance();
        return $ci->router->fetch_class();
    }
}
