<?php

namespace Src\RPC\Provider;

use Src\RPC\RpcProtocol;
use Src\Core\AbstractProvider;

class RpcServiceProvider extends AbstractProvider
{
    public function register()
    {
        $this->app->set('rpc_protocol', function () {
            return new RpcProtocol;
        });
    }
}