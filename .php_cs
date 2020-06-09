<?php
return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2'                                                => true,
        'phpdoc_align'                                         => true,
        'phpdoc_separation'                                    => true,
        'binary_operator_spaces'                               => ['align_double_arrow' => true],
        'array_syntax'                                         => ['syntax' => 'short'],
        'ordered_imports'                                      => true,
        'no_trailing_comma_in_singleline_array'                => true,
        'no_trailing_comma_in_list_call'                       => true,
        'class_attributes_separation'                          => ['elements' => ['method', 'property']],
        'single_blank_line_at_eof'                             => true,
        'blank_line_after_namespace'                           => true,
        'no_blank_lines_before_namespace'                      => false,
    ]);
