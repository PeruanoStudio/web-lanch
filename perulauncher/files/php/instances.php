<?php
$instance['SquidPeru'] = array_merge($instance['SquidPeru'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(
        "SoloPrime"
    ),
    "whitelistActive" => true,
    "status" => array(
        "nameServer" => "SquidPeru",
        "ip" => "hypixel.net",
        "port" => 19370
    )
));
?>
