<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYf1mKTv\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYf1mKTv/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYf1mKTv.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYf1mKTv\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYf1mKTv\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Yf1mKTv',
    'container.build_id' => '00a003bc',
    'container.build_time' => 1681284136,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYf1mKTv');
