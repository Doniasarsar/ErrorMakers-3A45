<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYWhljIx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYWhljIx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYWhljIx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYWhljIx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYWhljIx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YWhljIx',
    'container.build_id' => '2556f66c',
    'container.build_time' => 1645032232,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYWhljIx');
