<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDWJSUTd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDWJSUTd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDWJSUTd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDWJSUTd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDWJSUTd\App_KernelDevDebugContainer([
    'container.build_hash' => 'DWJSUTd',
    'container.build_id' => '5bfde551',
    'container.build_time' => 1699652330,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDWJSUTd');
