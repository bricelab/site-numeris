<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4G8Bgho\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4G8Bgho/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4G8Bgho.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4G8Bgho\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container4G8Bgho\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '4G8Bgho',
    'container.build_id' => '89944b72',
    'container.build_time' => 1565810251,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4G8Bgho');
