<?php return array(
    'root' => array(
        'name' => 'by34project/testpack',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '59fa11d274a19d57b589a5f9f625ca4bf1dbd1f6',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'by34project/testpack' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '59fa11d274a19d57b589a5f9f625ca4bf1dbd1f6',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '2.9.3',
            'version' => '2.9.3.0',
            'reference' => 'a30bfe2e142720dfa990d0a7e573997f5d884215',
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
                0 => '1.0.0 || 2.0.0 || 3.0.0',
            ),
        ),
    ),
);
