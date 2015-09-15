<?php

namespace Omnipay\Gate2shop\Message;

use Omnipay\Common\Message\RedirectResponseInterface;
use Payment\Response\JsonPaymentResponse;

/**
 * Gate2shop Purchase Response
 */
class PurchaseResponse extends JsonPaymentResponse implements RedirectResponseInterface
{
    public function isSuccessful()
    {
        return false;
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return $this->getRequest()->getEndpoint();
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return $this->data;
    }
}
