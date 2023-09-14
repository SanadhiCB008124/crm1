<?php

namespace App\Notifications;

use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReOrderNotification extends Notification
{
    use Queueable;

    protected $originalOrder;
    protected $newOrder;
    protected $user;

    /**
     * Create a new notification instance.
     */
    public function __construct( Order $originalOrder,Order  $newOrder, User $user)
    {
        $this->originalOrder = $originalOrder;
        $this->newOrder = $newOrder;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Order Placed')
            ->greeting('Hello,'. $this->user->name)
            ->line('Your order has been successfully  placed your re-order.')
            ->line('Order Number: ' . $this->newOrder->order_number)
            ->line('Total Amount: ' . $this->newOrder->total_amount)
            ->line('your order will be delivered within 7 days.')
            ->action('View Order', url('/my-orders/' . $this->newOrder->id))

            ->line('Thank you for shopping with us!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
