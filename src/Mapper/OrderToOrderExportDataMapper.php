<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Mapper;

use CristianoPacheco\OrderExport\Data\OrderExportData;
use Magento\Sales\Model\Order;

class OrderToOrderExportDataMapper
{
    public function map(Order $order): OrderExportData
    {
        return new OrderExportData((int)$order->getId());
    }
}
