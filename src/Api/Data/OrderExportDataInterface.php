<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Api\Data;

interface OrderExportDataInterface
{
    /**
     * @return int
     */
    public function getOrderId(): int;
}
