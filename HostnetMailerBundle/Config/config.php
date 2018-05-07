<?php

return [
    'name'        => 'Mailer Configuration',
    'description' => 'Filter sending of messages on Mautic.',
    'version'     => '2.1.3',
    'author'      => 'Henrique Rodrigues',
    'routes'      => [
    ],
    'services' => [
        'events' => [
            'plugin.hostnetmailer.formbundle.subscriber' => [
                'class'     => \MauticPlugin\HostnetMailerBundle\EventListener\FormSubscriber::class,
                'arguments' => [
                    'mautic.helper.integration',
                    'mautic.helper.mailer'
                ]
            ]
        ],
        'integrations' => [
            'mautic.integration.hostnetmailer' => [
                'class'     => \MauticPlugin\HostnetMailerBundle\Integration\HostnetMailerIntegration::class,
                'arguments' => [

                ],
            ]
        ]
    ]
];
