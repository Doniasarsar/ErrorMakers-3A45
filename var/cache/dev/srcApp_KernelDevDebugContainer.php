<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC732Tjx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC732Tjx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC732Tjx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC732Tjx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerC732Tjx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'C732Tjx',
    'container.build_id' => 'be9db0dd',
    'container.build_time' => 1645140310,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC732Tjx');
