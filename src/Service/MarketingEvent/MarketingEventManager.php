<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\MarketingEvent;

use Slince\Shopify\Model\MarketingEvent\MarketingEvent;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class MarketingEventManager extends GeneralCurdManager implements MarketingEventManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'marketing_events';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'marketing_event';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return MarketingEvent::class;
    }
}
