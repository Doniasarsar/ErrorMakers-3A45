<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOMXBhez\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOMXBhez/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOMXBhez.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOMXBhez\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOMXBhez\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OMXBhez',
    'container.build_id' => '1248faab',
    'container.build_time' => 1646521295,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOMXBhez');
