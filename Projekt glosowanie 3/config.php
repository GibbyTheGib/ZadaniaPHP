<?php
//konfiguracja
$conf->server_name = 'localhost:8000';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Glosowanie'; // TWOJA WŁASNA ŚCIEŻKA
$conf->action_root = $conf->app_root.'/ctrl.php?action=';

# konfiguracja bazy danych (wymagane)
$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'mydb';
$conf->db_user = 'root';
$conf->db_pass = '21371337lol';
$conf->db_charset = 'utf8';

# konfiguracja bazy danych (opcjonalna)
$conf->db_port = '3306';
#$conf->db_prefix = '';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

//wartości wygenerowane, lub na podstawie powyższych
$conf->action_url = $conf->server_url.$conf->action_root;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);