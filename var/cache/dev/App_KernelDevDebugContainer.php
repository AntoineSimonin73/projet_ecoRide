<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJVfhGQx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJVfhGQx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJVfhGQx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJVfhGQx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJVfhGQx\App_KernelDevDebugContainer([
    'container.build_hash' => 'JVfhGQx',
    'container.build_id' => '5a70762e',
    'container.build_time' => 1749025320,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJVfhGQx');
