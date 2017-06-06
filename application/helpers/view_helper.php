<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getFileName'))
{
    function getFileName()
    {
        $ci =& get_instance();
        return $ci->router->fetch_class();
    }
}

if( ! function_exists('crender'))
{
    function crender($f_template, $data = null)
    {   
        if (!isset($data['PHPfileName'])) {
            $data['PHPfileName'] = getFileName();
        }
        
        $data['fileName'] = getFileName();
        //For your css files
        if (file_exists('public/custom/css/'. $data['fileName'] .'.css')) {
            $data['cssFile'] = 'public/custom/css/'. $data['fileName'] .'.css';
        } elseif (file_exists('public/custom/css/'. $data['PHPfileName'] .'.css')) {
            $data['cssFile'] = 'public/custom/css/'. $data['PHPfileName'] .'.css';
        } else {
            $data['cssFile'] = '';
        }
        //For your js files
        if (file_exists('public/custom/js/'. $data['fileName'] .'.js')) {
            $data['jsFile'] = 'public/custom/js/'. $data['fileName'] .'.js';
        } elseif (file_exists('public/custom/js/'. $data['PHPfileName'] .'.js')) {
            $data['jsFile'] = 'public/custom/js/'. $data['PHPfileName'] .'.js';
        }

        $ci =& get_instance();
        $ci->load->view('templates/header', $data);
        $ci->load->view($data['PHPfileName']);
        $ci->load->view('templates/footer', $data);
    }
}
