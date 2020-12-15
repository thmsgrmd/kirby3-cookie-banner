<?php

@include_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib/CookieMethods.php';

Kirby::plugin('michnhokn/cookie-banner', [
    'snippets' => [
        'cookie-modal' => __DIR__ . '/snippets/cookie-modal.php',
        'cookie-modal-option' => __DIR__ . '/snippets/cookie-modal-option.php',
    ],
    'translations' => [
        'de' => [
            'michnhokn.cookie-banner.title' => 'Cookie Einstellungen',
            'michnhokn.cookie-banner.text' => 'Wir nutzen Cookies um Dir die bestmögliche Erfahrung zu bieten. Außerdem können wir damit das Verhalten der Benutzer analysieren um die Webseite stetig für Dich zu verbessern. (link: datenschutz text: Datenschutz)',
            'michnhokn.cookie-banner.essentialText' => 'Essentiell',
            'michnhokn.cookie-banner.denyAll' => 'Alle ablehnen',
            'michnhokn.cookie-banner.acceptAll' => 'Alle annehmen',
            'michnhokn.cookie-banner.save' => 'Einstellung speichern',
        ],
        'en' => [
            'michnhokn.cookie-banner.title' => 'Cookie settings',
            'michnhokn.cookie-banner.text' => 'We use cookies to provide you with the best possible experience. They also allow us to analyze user behavior in order to constantly improve the website for you. (link: privacy-policy text: Privacy Policy)',
            'michnhokn.cookie-banner.essentialText' => 'Essential',
            'michnhokn.cookie-banner.denyAll' => 'Reject All',
            'michnhokn.cookie-banner.acceptAll' => 'Accept All',
            'michnhokn.cookie-banner.save' => 'Save settings',
        ],
        'fr' => [
            'michnhokn.cookie-banner.title' => 'Configuration des cookies',
            'michnhokn.cookie-banner.text' => 'Nous utilisons des cookies pour vous fournir la meilleure expérience possible. Ils nous permettent aussi d\'analyser l\'interaction des visiteurs avec le site pour l\'améliorer continuellement. (link: privacy-policy text: Politique de confidentialité)',
            'michnhokn.cookie-banner.essentialText' => 'Nécessaires',
            'michnhokn.cookie-banner.denyAll' => 'Tout refuser',
            'michnhokn.cookie-banner.acceptAll' => 'Tout accepter',
            'michnhokn.cookie-banner.save' => 'Enregistrer les paramètres',
        ]
  ],
    'options' => [
        'features' => []
    ]
]);
