<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWFbOqtx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWFbOqtx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWFbOqtx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWFbOqtx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWFbOqtx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WFbOqtx',
    'container.build_id' => '833216da',
    'container.build_time' => 1646771709,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWFbOqtx');
