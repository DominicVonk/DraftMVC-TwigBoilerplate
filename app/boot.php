<?php

define('DRAFT_CONTROLLERS', __DIR__ . '/controllers');
define('DRAFT_VIEWS', __DIR__ . '/views');
define('DRAFT_CONFIGS', __DIR__ . '/../config');
define('DRAFT_STORAGE', __DIR__ . '/storage');

define('APP_FOLDER', __DIR__);
define('DATA_FOLDER', realpath(__DIR__.'/../data'));
define('PHP_VENDOR_FOLDER', realpath(__DIR__.'/../vendor'));

// setlocale(LC_ALL, 'nl_NL');

require(PHP_VENDOR_FOLDER.'/autoload.php');

\DraftMVC\DraftRouter::setViewClass('\DraftMVC\DraftViewTwig');
\DraftMVC\DraftRouter::setViewExtension('twig');
\DraftMVC\DraftRouter::disableLayoutSearch();

require(APP_FOLDER . '/library/session.php');
require(APP_FOLDER . '/library/config.php');

//Config::load("db.json");
Config::load("routes.json");
Config::load("general.json");

require(APP_FOLDER . '/library/db.php');
require(APP_FOLDER . '/library/password.php');
require(APP_FOLDER . '/library/idlock.php');


/* Add models here */
//\DraftMVC\DraftModel::useDB(new DB());
//require(APP_FOLDER . '/models/user.php');

Session::start();

\DraftMVC\DraftRouter::route(
    \DraftMVC\DraftConfig::get('routes')
);
