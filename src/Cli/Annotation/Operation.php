<?php

declare(strict_types=1);

namespace Imi\Cli\Annotation;

use Imi\Bean\Annotation\Parser;

/**
 * 命令行动作注解.
 *
 * @Annotation
 * @Target("METHOD")
 * @Parser("Imi\Cli\Parser\ToolParser")
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Operation extends CommandAction
{
    /**
     * {@inheritDoc}
     */
    protected $__alias = CommandAction::class;
}
