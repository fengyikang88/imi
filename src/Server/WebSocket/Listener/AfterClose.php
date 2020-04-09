<?php
namespace Imi\Server\WebSocket\Listener;

use Imi\Bean\Annotation\ClassEventListener;
use Imi\Server\Event\Param\CloseEventParam;
use Imi\Server\Event\Listener\ICloseEventListener;
use Imi\Server\ConnectContext\Traits\TConnectContextRelease;

/**
 * Close事件后置处理
 * @ClassEventListener(className="Imi\Server\WebSocket\Server",eventName="close",priority=Imi\Util\ImiPriority::IMI_MIN)
 */
class AfterClose implements ICloseEventListener
{
    use TConnectContextRelease;

    /**
     * 事件处理方法
     * @param CloseEventParam $e
     * @return void
     */
    public function handle(CloseEventParam $e)
    {
        $this->release($e->fd);
    }
}