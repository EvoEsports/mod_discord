<?php
defined('_JEXEC') or die;

$serverId = htmlspecialchars($params->get('serverId', ''));
$theme = htmlspecialchars($params->get('theme', 'dark'));

require JModuleHelper::getLayoutPath('mod_discord');
