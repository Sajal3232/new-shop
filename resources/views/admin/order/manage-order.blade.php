@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="well">
           @if ($message=Session::get('message'))
                <h2 id="xyz" class="text-center text-success">{{$message}}</h2>
            @endif
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">SI No</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Order Total</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">Order Status</th>
                  <th scope="col">Payment Type</th>
                  <th scope="col">Payment status</th>
                  <th scope="col">Action</th>                  
                </tr>
              </thead>
              @php ($i=1)
              @foreach($orders as $order)
              <tbody>
                <td>{{$i++}}</td>
                <td>{{$order->first_name.' '.$order->last_name}}</td>
                <td>{{$order->order_total}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->order_status}}</td>
                <td>{{$order->payment_type}}</td>
                <td>{{$order->payment_status}}</td>
                <td>
                     <a href="{{route('view-order-detail',['id'=>$order->id])}}" class="btn btn-info btn-sm" title="view order details">
                        <span class=""><i class="fas fa-search-plus    "></i></span>
                    </a>

                    <a href="{{route('view-order-invoice',['id'=>$order->id])}}" class="btn btn-warning btn-sm" title="view order invoice">
                        <span class=""><i class="fas fa-search-minus    "></i></i></span>
                    </a>

                    <a href="{{route('download-order-invoice',['id'=>$order->id])}}" class="btn btn-primary btn-sm" title="download order invoice">
                    <span><i class="fas fa-download    "></i></span>
                    </a>

                    <a href="{{route('edit-category',['id'=>$order->id])}}" class="btn btn-success btn-sm" title="download order invoice">
                    <span><i class="fas fa-edit    "></i></span>
                    </a>

                    <a href="{{route('edit-category',['id'=>$order->id])}}" class="btn btn-danger btn-sm" title="download order invoice">
                    <span><i class="fas fa-trash    "></i></span>
                    </a>

                </td>
              </tbody>
              @endforeach
            </table>
        </div>
    </div>
</div>
@endsection