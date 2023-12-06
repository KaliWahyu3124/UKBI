<?php
session_start();

require_once 'connection.php';

$connection = new Connection();
$db = $connection->connect();