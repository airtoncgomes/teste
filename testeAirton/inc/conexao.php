<?php
session_start();

$base_path = 'C:\Bitnami\wappstack-7.3.8-0\apache2\htdocs\testeAirton\admin\\';
$base_url = 'http://localhost/testeAirton/admin/';
$base_url1 = 'http://localhost/testeAirton/';

$conexao = pg_connect('host=localhost port=5432 dbname=teste user=postgres password=senha5');
if(!$conexao){
	echo 'nao rolou';
}