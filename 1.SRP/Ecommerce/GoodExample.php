<?php

class OrderRepository
{
    public function save(array $order): void
    {
        echo "Saving order #{$order['id']} to database.\n";
    }
}

class NotificationService
{
    public function notifyCustomer(array $order): void
    {
        echo "Notifying customer about order #{$order['id']}.\n";
    }
}

readonly class OrderManager
{
    public function __construct(
        private OrderRepository     $repository,
        private NotificationService $notifier
    ) {}

    public function addOrder(array $order): void
    {
        $this->repository->save($order);
        $this->notifier->notifyCustomer($order);
    }
}

// استفاده
$repository = new OrderRepository();
$notifier = new NotificationService();
$manager = new OrderManager($repository, $notifier);

$manager->addOrder(['id' => 201, 'item' => 'Laptop', 'customer' => 'Ali']);
