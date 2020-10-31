@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="well">
                <head>
                    <meta charset="utf-8">
                    <title>Example 1</title>
                    <link rel="stylesheet" href="{{asset('/')}}/admin/invoice/style.css" media="all" />
                </head>
                <body>
                    <header class="clearfix">
                    <div id="logo">
                        <img src="{{asset('/')}}/admin/invoice/logo.png">
                    </div>
                    <h1>INVOICE 3-2-1</h1>
                    <div id="company" class="clearfix">
                        <div>Company Name</div>
                        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
                        <div>(602) 519-0450</div>
                        <div><a href="mailto:company@example.com">company@example.com</a></div>
                    </div>
                    <div id="project">
                        <h6>shipping info</h6>
                        <div><span>Customer</span> {{$shipping->full_name}}</div>
                        <div><span>Address</span>{{$shipping->address}}</div>
                        <div><span>Phone</span> {{$shipping->phone}}</div>
                    
                    </div>

                    <div id="project">
                        <h6>billing info</h6>
                        <div><span>Customer</span> {{$customer->first_name.' '.$customer->last_name}}</div>
                        <div><span>Address</span>{{$customer->address}}</div>
                        <div><span>Phone</span> {{$customer->phone}}</div>
                    
                    </div>

                    </header>
                    <main>
                    <table>
                        <thead>
                        <tr>
                            <th class="service">PRODUCT NAME</th>
                            <th class="desc">PRODUCT ID</th>
                            <th>PRICE</th>
                            <th>QTY</th>
                            <th>TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php($sum=0)
                        @foreach($orderDetails as $orderDetail)
                        <tr>
                            <td class="service">{{$orderDetail->product_name}}</td>
                            <td class="desc">{{$orderDetail->product_id}}</td>
                            <td class="unit">Tk {{$orderDetail->product_price}}</td>
                            <td class="qty">{{$orderDetail->product_quantity}}</td>
                            <td class="total">Tk {{$total=$orderDetail->product_quantity*$orderDetail->product_price}}</td>
                        </tr>
                        @php($sum=$sum+$total)
                       @endforeach
                        <tr>
                            <td colspan="4">SUBTOTAL</td>
                            <td class="total">{{$sum}}</td>
                        </tr>
                        
                        </tbody>
                    </table>
                    
                    </main>
                    <footer>
                    Invoice was created on a computer and is valid without the signature and seal.
                    </footer>
                </body>
        </div>
    </div>
</div>

@endsection