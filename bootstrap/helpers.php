<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/7/12
 * Time: 19:58
 */
use App\Services\TestService;

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
function test_service()
{
    $test = new TestService();
    return $test->testHelper();
}