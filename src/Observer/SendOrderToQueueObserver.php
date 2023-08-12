<?php

declare(strict_types=1);

namespace CristianoPacheco\OrderExport\Observer;

use CristianoPacheco\OrderExport\Service\SendOrderToQueueService;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

readonly class SendOrderToQueueObserver implements ObserverInterface
{
    public function __construct(
        private SendOrderToQueueService $sendOrderToQueueService
    ) {
    }

    public function execute(Observer $observer): void
    {
        $order = $observer->getData('order');
        $this->sendOrderToQueueService->execute($order);
    }
}
