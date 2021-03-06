<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'Biko\Frontend\Module',
        'path'      => __DIR__ . '/../apps/frontend/Module.php'
    ),
    'backend' => array(
        'className' => 'Biko\Backend\Module',
        'path'      => __DIR__ . '/../apps/backend/Module.php'
    )
));
