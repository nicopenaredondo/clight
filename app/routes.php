<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Note!!!
|--------------------------------------------------------------------------
| the routes is in the app/routes directory. i divided the routes into different
| file so it can be clean as the system goes larger
|
*/

/*--------------------------------------------------------------------------
|  Routes - app/routes/
|--------------------------------------------------------------------------
| 1. Dashboard - Dashboard.php
| 2. MyExpense - MyExpense.php
| 3. MyBalance - MyBalance.php 
| 4. Reports   - Report.php
| 5. Settings  - Setting.php
| 6. Auth      - Auth.php
*/

foreach (glob(dirname(__FILE__)."/routes/*.php") as $filename)
{
    include_once $filename;
}



