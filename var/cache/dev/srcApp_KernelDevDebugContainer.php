<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWrbWrv2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWrbWrv2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWrbWrv2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWrbWrv2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWrbWrv2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WrbWrv2',
    'container.build_id' => '2cb00b41',
    'container.build_time' => 1646753564,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWrbWrv2');
