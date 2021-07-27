<?php
namespace src;

class Config {
    //Sempre escrever no padrão "/pastaProjeto/public"
    const BASE_DIR = '/A_Projs_Mvc/Mvc_Crud/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'mvc_master';
    CONST DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}