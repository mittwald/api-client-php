<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src');;

$config = new PhpCsFixer\Config();
return $config
    ->setFinder($finder)
    ->setRules([
        '@PSR12'                       => true,
        'strict_param'                 => true,
        'array_syntax'                 => ['syntax' => 'short'],
        'global_namespace_import'      => ['import_classes' => true, 'import_constants' => true, 'import_functions' => true],
        'ordered_imports'              => ['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha'],
        'fully_qualified_strict_types' => true,
    ]);
