app.controller('offeringsCtrl', ($scope, $http) => {
    $scope.offerings = offerings;
    $scope.errors = {}
    $scope.selectedOffering = {}
    $scope.purchase = {
    	quantity: 1
    }
    $scope.openModal = offering => {
        $scope.purchase = { quantity: 1 };
    	$scope.selectedOffering = offering;
    	$scope.purchase.offering_id = offering.id
	    $('#purchaseModal').modal('show')
    }

    $scope.save = ()=> {
    	$scope.errors = {}
    	$http.post('/purchases', $scope.purchase)
    	.then(response => {
            $('#purchaseModal').modal('hide')
            $scope.selectedOffering = {}
    	}, error => {
    		$scope.errors = error.data.errors
    	})
    }
});