<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/7/12
 * Time: 19:58
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}