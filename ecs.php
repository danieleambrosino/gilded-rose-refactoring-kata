<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/fixtures',
    ]);

    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::CLEAN_CODE,
        SetList::COMMON,
    ]);

    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class,
        [
            'operators' => [
                '=>' => 'align'
            ]
        ]
    );
};
