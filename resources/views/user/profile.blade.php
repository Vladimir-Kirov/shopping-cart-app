@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>User Profile</h1>
			<hr>
			@foreach($orders as $order)
				<div class="panel panel-primary">
				 	<div class="panel-heading">My Orders</div>
					<div class="panel-body">
						<ul class="list-group">
							@foreach($order->cart->items as $item)
								<li class="list-group-item">
									<span class="badge">${{ $item['price'] }}</span>
									{{ $item['item']['title'] }} | {{ $item['qty'] }} Units
								</li>
							@endforeach
						</ul>
					</div>
					<div class="panel-footer">
						<strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
					</div>
				</div>
			@endforeach
		</div>	
	</div>
@endsection

