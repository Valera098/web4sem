<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN5a4xtZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN5a4xtZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN5a4xtZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN5a4xtZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN5a4xtZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'N5a4xtZ',
    'container.build_id' => 'a49933c7',
    'container.build_time' => 1636783890,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN5a4xtZ');