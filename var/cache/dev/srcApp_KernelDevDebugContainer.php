<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRABhmTy\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRABhmTy/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRABhmTy.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRABhmTy\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRABhmTy\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RABhmTy',
    'container.build_id' => 'd22ca725',
    'container.build_time' => 1646826173,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRABhmTy');
