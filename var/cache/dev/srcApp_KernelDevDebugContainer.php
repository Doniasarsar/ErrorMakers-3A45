<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7xPHX9V\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7xPHX9V/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7xPHX9V.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7xPHX9V\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container7xPHX9V\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '7xPHX9V',
    'container.build_id' => '4f1aa280',
    'container.build_time' => 1645534041,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7xPHX9V');
