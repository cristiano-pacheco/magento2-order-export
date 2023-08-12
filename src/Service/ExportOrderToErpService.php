<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Service;

use CristianoPacheco\OrderExport\Api\Data\OrderExportDataInterface;
use Exception;

class ExportOrderToErpService
{
    public function execute(OrderExportDataInterface $orderExportData): void
    {
        $orderId = $orderExportData->getOrderId();
        if ($orderExportData->getOrderId() % 2 !== 0) {
            throw new Exception("The order $orderId id is invalid");
        }
    }
}
