<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7J0n3Ni\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7J0n3Ni/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7J0n3Ni.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7J0n3Ni\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7J0n3Ni\App_KernelDevDebugContainer([
    'container.build_hash' => '7J0n3Ni',
    'container.build_id' => '12a41bc7',
    'container.build_time' => 1598002158,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7J0n3Ni');
