<?php

namespace Cyy\Event;

interface Dispatchable
{
    public function onDispatch(EventArgument $arg);
}
