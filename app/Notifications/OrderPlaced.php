<?php

namespace App\Notifications;

use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderPlaced extends Notification
{
    use Queueable;

    protected $order;
    protected $user;

    /**
     * Create a new notification instance.
     */
    public function __construct(Order $order, User $user)
    {
        $this->order = $order;
        $this->user=$user;
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
            ->line('Your order has been successfully placed.')
            ->line('Order Number: ' . $this->order->order_number)
            ->line('Total Amount: ' . $this->order->total_amount)
            ->line('your order will be delivered within 7 days.')
            ->action('View Order', url('/my-orders/' . $this->order->id))

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
