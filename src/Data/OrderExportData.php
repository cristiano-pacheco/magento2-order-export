<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Data;

use CristianoPacheco\OrderExport\Api\Data\OrderExportDataInterface;

readonly class OrderExportData implements OrderExportDataInterface
{
    public function __construct(private int $order_id)
    {
    }

    public function getOrderId(): int
    {
        return $this->order_id;
    }
}
