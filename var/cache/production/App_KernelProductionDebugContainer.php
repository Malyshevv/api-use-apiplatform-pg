<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGLxLKZn\App_KernelProductionDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGLxLKZn/App_KernelProductionDebugContainer.php') {
    touch(__DIR__.'/ContainerGLxLKZn.legacy');

    return;
}

if (!\class_exists(App_KernelProductionDebugContainer::class, false)) {
    \class_alias(\ContainerGLxLKZn\App_KernelProductionDebugContainer::class, App_KernelProductionDebugContainer::class, false);
}

return new \ContainerGLxLKZn\App_KernelProductionDebugContainer([
    'container.build_hash' => 'GLxLKZn',
    'container.build_id' => '841a8c37',
    'container.build_time' => 1636314771,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGLxLKZn');
