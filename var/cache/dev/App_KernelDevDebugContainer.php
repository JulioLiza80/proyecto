<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLiznIm2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLiznIm2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLiznIm2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLiznIm2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLiznIm2\App_KernelDevDebugContainer([
    'container.build_hash' => 'LiznIm2',
    'container.build_id' => '8d03c71c',
    'container.build_time' => 1728572602,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLiznIm2');
