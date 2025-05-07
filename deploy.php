<?php
namespace Deployer;

require 'recipe/composer.php';

// Config

set('repository', 'https://github.com/Gaillard2/DeployTest.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('monserveur.exemple.com')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Hello');

// Hooks

after('deploy:failed', 'deploy:unlock');
