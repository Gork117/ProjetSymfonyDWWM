<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHSHsaox\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHSHsaox/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHSHsaox.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHSHsaox\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHSHsaox\App_KernelDevDebugContainer([
    'container.build_hash' => 'HSHsaox',
    'container.build_id' => 'd9024f9b',
    'container.build_time' => 1627912556,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHSHsaox');
