<?php return array(
    'root' => array(
        'name' => 'guocps/hello-composer',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'f38adeb09ff5cb79d3aa2120aebf34f46a5f1b79',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'guocps/hello-composer' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'f38adeb09ff5cb79d3aa2120aebf34f46a5f1b79',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '3.2.0',
            'version' => '3.2.0.0',
            'reference' => '305444bc6fb6c89e490f4b34fa6e979584d7fa81',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '3.0.0',
            ),
        ),
        'roave/security-advisories' => array(
            'pretty_version' => 'dev-latest',
            'version' => 'dev-latest',
            'reference' => '85ea494f3599c1d23c81c65d0c994e0f80895a75',
            'type' => 'metapackage',
            'install_path' => NULL,
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
    ),
);
