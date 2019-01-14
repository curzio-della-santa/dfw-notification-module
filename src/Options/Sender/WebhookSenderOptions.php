<?php

namespace Detail\Notification\Options\Sender;

use Zend\Stdlib\AbstractOptions;

class WebhookSenderOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $userAgent;

    /** @todo Add 'verify' option for certificate validation ignore in dev environment */

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }
}
