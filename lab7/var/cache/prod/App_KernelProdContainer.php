<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ1rWkkX\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ1rWkkX/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerQ1rWkkX.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerQ1rWkkX\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerQ1rWkkX\App_KernelProdContainer([
    'container.build_hash' => 'Q1rWkkX',
    'container.build_id' => '2bae4e22',
    'container.build_time' => 1636783120,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ1rWkkX');
