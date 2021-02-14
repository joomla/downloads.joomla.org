<?php

require dirname(__DIR__) . '/configuration.php';

$config = new JConfig;

$db = new mysqli($config->host, $config->user, $config->password, $config->db);

if (!$db->query("TRUNCATE " . $config->dbprefix . "ars_log")) {
  printf("Error: %s\n", $db->error);
}

$db->close();
