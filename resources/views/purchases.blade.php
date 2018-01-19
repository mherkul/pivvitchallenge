@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="purchasesCtrl">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Purchases</div>

					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th>Purchase ID</th>
									<th>Offering title</th>
									<th>Quantity</th>
									<th>Unit price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="purchase in purchases">
									<td>@{{ purchase.id }}</td>
									<td>@{{ purchase.offering.title }}</td>
									<td>@{{ purchase.quantity }}</td>
									<td>$@{{ purchase.offering.price }}</td>
									<td>$@{{ purchase.offering.price * purchase.quantity }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript">window.purchases = {!! $purchases !!}</script>
	<script type="text/javascript" src="{{ asset('js/purchases.js') }}"></script>
@stop