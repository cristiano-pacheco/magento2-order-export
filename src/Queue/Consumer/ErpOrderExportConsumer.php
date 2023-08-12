<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Queue\Consumer;

use CristianoPacheco\OrderExport\Api\Data\OrderExportDataInterface;
use CristianoPacheco\OrderExport\Service\ExportOrderToErpService;
use Exception;

readonly class ErpOrderExportConsumer
{
    public function __construct(private readonly ExportOrderToErpService $exportOrderToErpService)
    {
    }

    /**
     * @throws Exception
     */
    public function execute(OrderExportDataInterface $orderExportData): void
    {
        $this->exportOrderToErpService->execute($orderExportData);
    }
}
