<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGMYXLNr\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGMYXLNr/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGMYXLNr.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGMYXLNr\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGMYXLNr\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GMYXLNr',
    'container.build_id' => 'ebe7599b',
    'container.build_time' => 1645196076,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGMYXLNr');
