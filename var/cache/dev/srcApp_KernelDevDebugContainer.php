<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBBOSAOP\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBBOSAOP/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBBOSAOP.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBBOSAOP\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBBOSAOP\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BBOSAOP',
    'container.build_id' => 'e3814487',
    'container.build_time' => 1645654475,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBBOSAOP');
