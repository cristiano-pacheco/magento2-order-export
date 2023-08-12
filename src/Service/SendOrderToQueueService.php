<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Service;

use CristianoPacheco\OrderExport\Mapper\OrderToOrderExportDataMapper;
use CristianoPacheco\OrderExport\Queue\Publisher\ErpOrderExportPublisher;
use Magento\Sales\Model\Order;

readonly class SendOrderToQueueService
{
    public function __construct(
        private OrderToOrderExportDataMapper $orderToOrderExportDataMapper,
        private ErpOrderExportPublisher $erpOrderExportPublisher
    ) {
    }

    public function execute(Order $order): void
    {
        $orderExportData = $this->orderToOrderExportDataMapper->map($order);
        $this->erpOrderExportPublisher->execute($orderExportData);
    }
}
