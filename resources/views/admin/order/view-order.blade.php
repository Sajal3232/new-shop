@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="well">
                <h2 id="xyz" class="text-center text-success">Customer Info For The Order</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Customer Name</th>
                    <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{$customer->phone}}</td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td>{{$customer->email}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$customer->address}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="well">
                <h2 id="xyz" class="text-center text-success">Order details Info For The Order</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Order Id</th>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <th>Order Total</th>
                    <td>{{$order->order_total}}</td>
                </tr>
                <tr>
                    <th>Order Status</th>
                    <td>{{$order->order_status}}</td>
                </tr>
                
                <tr>
                    <th>Order Date</th>
                    <td>{{$order->created_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="well">
                <h2 id="xyz" class="text-center text-success">Shipping Info For The Order</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Full Name</th>
                    <td>{{$shipping->full_name}}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{$shipping->phone}}</td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td>{{$shipping->email}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$shipping->address}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="well">
                <h2 id="xyz" class="text-center text-success">Payment Info For The Order</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Payment Type</th>
                    <td>{{$payment->payment_type}}</td>
                </tr>
                <tr>
                    <th>Payment Status</th>
                    <td>{{$payment->payment_status}}</td>
                </tr>
                
            </table>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="well">
                <h2 id="xyz" class="text-center text-success">Product Info for this order</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">SI No</th>
                  <th scope="col">Product Id</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Product Quantity</th>
                  <th scope="col">Total</th>               
                </tr>
              </thead>
              @php ($i=1)
              @foreach($orderDetails as $orderDetail)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$orderDetail->product_id}}</td>
                    <td>{{$orderDetail->product_name}}</td>
                    <td>TK. {{$orderDetail->product_price}}</td>
                    <td>{{$orderDetail->product_quantity}}</td>
                    <td>Tk. {{$orderDetail->product_price*$orderDetail->product_quantity}}</td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection