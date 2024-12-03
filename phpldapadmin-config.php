<?php
$config = new stdClass();

// Server configuration
$config->servers = new stdClass();
$config->servers->localhost = new stdClass();

// LDAP server connection details
$config->servers->localhost->host = 'ldap';
$config->servers->localhost->port = 389;
$config->servers->localhost->base = 'dc=example,dc=com';

// Binding configuration
$config->servers->localhost->login = 'cn=admin,dc=example,dc=com';
$config->servers->localhost->pass = 'admin123';

// Appearance settings
$config->custom = new stdClass();
$config->custom->appearance = new stdClass();
$config->custom->appearance['hide_template_warning'] = true;
$config->custom->appearance['auto_number'] = false;
$config->custom->appearance['show_alerts'] = true;
$config->custom->appearance['default_list_view'] = 'tree';

// Display settings
$config->servers->localhost->visible = true;
$config->servers->localhost->read_only = false;

// Anonymous binding
$config->servers->localhost->anonymous = false;

return $config;
