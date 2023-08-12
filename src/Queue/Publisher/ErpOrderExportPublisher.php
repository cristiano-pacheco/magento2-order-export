<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Queue\Publisher;

use CristianoPacheco\OrderExport\Api\Data\OrderExportDataInterface;
use Magento\Framework\MessageQueue\PublisherInterface;

class ErpOrderExportPublisher
{
    public const TOPIC_NAME = 'erp_order_export';

    public function __construct(private readonly PublisherInterface $publisher)
    {
    }

    public function execute(OrderExportDataInterface $data): void
    {
        $this->publisher->publish(self::TOPIC_NAME, $data);
    }
}
