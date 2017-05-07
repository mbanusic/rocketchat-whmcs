<?php


if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function rocketchat_livechat_config()
{
    return array(
        'name' => 'Rocket.Chat LiveChat',
        'description' => 'This module provides the basic LiveChat capability for support',
        'author' => 'Marko Banušić',
        'language' => 'english',
        'version' => '1.0',
        'fields' => array(
            'rocketchat-url' => array(
                'FriendlyName' => 'URL of LiveChat',
                'Type' => 'text',
                'Size' => '25',
                'Default' => 'https://rocket.chat',
                'Description' => 'Please enter the URL to your Rocket.Chat instance (e.g. https://chat.domain.tld/)',
            ),
            'rocketchat-enable' => array(
                'FriendlyName' => 'Enable',
                'Type' => 'yesno',
                'Description' => 'Tick to enable',
            ),

        )
    );
}
