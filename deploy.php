<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('application', 'Hajusrakendus');
set('remote_user', 'virt118426');
set('http_user', 'virt118426');
set('keep_releases', 2);

//Zone ühendus
host('ta22ansper.itmajakas.ee')
    ->setHostname('ta22ansper.itmajakas.ee')
    ->set('http_user', 'virt118426')
    ->set('deploy_path', '~/domeenid/www.ta22ansper.itmajakas.ee/hajus')
    ->set('branch', 'main');

set('repository', 'git@github.com:Aren4A/Hajusrak.git');

//tasks
task('opcache:clear', function () {
    run('killall php82-cgi || true');
})->desc('Clear opcache');

task('build:node', function () {
    cd('{{release_path}}');
    run('npm i');
    run('npx vite build');
    run('rm -rf node_modules');
});

task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'build:node',
    'deploy:publish',
    'opcache:clear',
    'artisan:cache:clear',
]);
// Hooks

after('deploy:failed', 'deploy:unlock');
