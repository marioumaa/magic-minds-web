<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRIxSd5x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRIxSd5x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRIxSd5x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRIxSd5x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRIxSd5x\App_KernelDevDebugContainer([
    'container.build_hash' => 'RIxSd5x',
    'container.build_id' => '6625ed3c',
    'container.build_time' => 1715899346,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRIxSd5x');