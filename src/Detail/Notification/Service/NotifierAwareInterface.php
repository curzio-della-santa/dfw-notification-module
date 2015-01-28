<?php

namespace Detail\Notification\Service;

use Detail\Notification\NotifierInterface;

interface NotifierAwareInterface
{
    /**
     * @param NotifierInterface $notifier
     */
    public function setNotifier(NotifierInterface $notifier);
}
