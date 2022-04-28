<?php


namespace App\Labels;


use App\Models\CallRequest;

class CallRequestLabel
{
    public static function status($order)
    {
        switch ($order->status_id) {
            case CallRequest::STATUS_CALL:
                $class = 'badge badge-warning';
                break;
            case CallRequest::STATUS_MEETING:
                $class = 'badge badge-info';
                break;
            case CallRequest::STATUS_IN_WORK:
                $class = 'badge badge-dark';
                break;
            case CallRequest::STATUS_IN_PAYMENT:
                $class = 'badge badge-primary';
                break;
            case CallRequest::STATUS_IN_SUCCESS:
                $class = 'badge badge-success';
                break;
            case CallRequest::STATUS_NEW:
                $class = 'badge badge-danger';
                break;
            default:
                $class = 'badge badge-secondary';
                break;
        }

        return '<span class="'.$class.'">'.$order->getStatus().'</span>';
    }
}
