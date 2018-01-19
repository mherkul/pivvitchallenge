@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="offeringsCtrl">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">Offerings</div>

	                <div class="panel-body">
	                    <table class="table">
	                    	<thead>
	                    		<tr>
	                    			<th>Title</th>
	                    			<th>Price</th>
	                    			<th>Action</th>
	                    		</tr>
	                    	</thead>
	                    	<tbody>
	                    		<tr ng-repeat="offering in offerings">
	                    			<td>@{{ offering.title }}</td>
	                    			<td>$@{{ offering.price }}</td>
	                    			<td>
	                    				<nutton class="btn btn-primary" ng-click="openModal(offering)">
	                    					<i class="glyphicon glyphicon-plus"></i>
	                    				</nutton>
	                    			</td>
	                    		</tr>
	                    	</tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>

		<div id="purchaseModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Create purchase for @{{ selectedOffering.title }}</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Customer name:</label>
							<input type="text" class="form-control" ng-model="purchase.customer_name"/>
							<small class="text-danger" ng-if="errors.customer_name">@{{ errors.customer_name[0] }}</small>
						</div>
						<div class="form-group">
							<label>Quantity:</label>
							<input type="number" class="form-control" ng-model="purchase.quantity"/>
							<small class="text-danger" ng-if="errors.quantity">@{{ errors.quantity[0] }}</small>
						</div>
						<div class="form-group">
							<label>Total Price:</label>
							$<span>@{{ purchase.quantity * selectedOffering.price }}</span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" ng-click="save()">Save</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript">window.offerings = {!! $offerings !!}</script>
	<script type="text/javascript" src="{{ asset('js/offerings.js') }}"></script>
@stop