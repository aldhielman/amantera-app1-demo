<?php

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.rememberMeDuration' => 60 * 60,

    // keycloak SSO Server
    'keycloak.clientId' => 'app1',
    'keycloak.clientSecret' => '1db25277-4895-4afd-9ba9-8a3b574a26b3',
    'keycloak.issuerUrl' => 'http://172.16.16.80:8080/auth/realms/amantera', // http
    'keycloak.logoutUrl' => 'http://172.16.16.80:8080/auth/realms/amantera/protocol/openid-connect/logout', // http
    // 'keycloak.issuerUrl' => 'https://sso.bcperak.net/auth/realms/amantera' // https

];
