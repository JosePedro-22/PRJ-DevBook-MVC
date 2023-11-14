<?php
namespace src;

class Config {
    const BASE_DIR = '/public';

    const DB_DRIVER = 'pgsql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'devsBook';
    CONST DB_USER = 'postgres';
    const DB_PASS = 'admin123';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}