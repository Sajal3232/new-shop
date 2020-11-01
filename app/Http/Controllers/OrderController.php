<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class OrderController extends Controller
{
    public function manageOrderInfo(){

           $orders= DB::table('orders')
                    ->join('customers','orders.customer_id', '=' ,'customers.id')  ///primary key
                    ->join('payments','orders.id', '=' ,'payments.order_id')  ///primary key
                    ->select('orders.*','customers.first_name','customers.last_name','payments.payment_status','payments.payment_type')
                    ->get();

        return view('admin.order.manage-order',['orders'=>$orders]);
    }

    public function vieworderdetail($id){
            $order=Order::find($id);
            $customer=customer::find($order->customer_id);
            $shipping=shipping::find($order->shipping_id);
            $payment=payment::where('order_id',$order->id)->first();
            $orderDetails=OrderDetail::where('order_id',$order->id)->get();

            return view('admin.order.view-order',[
                'order'=>$order,
                'customer'=>$customer,
                'shipping'=>$shipping,
                'payment'=>$payment,
                'orderDetails'=>$orderDetails

            ]);
    }


    public function vieworderinvoice($id){
        $order=Order::find($id);
        $customer=customer::find($order->customer_id);
        $shipping=shipping::find($order->shipping_id);
        // $payment=payment::where('order_id',$order->id)->first();
        $orderDetails=OrderDetail::where('order_id',$order->id)->get();

        return view('admin.order.view-order-invoice',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'orderDetails'=>$orderDetails
        ]);
    }

    public function downloadorderinvoice($id){
        $order=Order::find($id);
        $customer=customer::find($order->customer_id);
        $shipping=shipping::find($order->shipping_id);
        // $payment=payment::where('order_id',$order->id)->first();
        $orderDetails=OrderDetail::where('order_id',$order->id)->get();

        $pdf = PDF::loadView('admin.order.download-invoice',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'orderDetails'=>$orderDetails
        ]);
        return $pdf->stream('invoice.pdf');
    }
}
