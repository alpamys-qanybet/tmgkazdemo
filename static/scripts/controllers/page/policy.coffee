angular.module('tmg').controller 'PagePolicyCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'PagePolicyCtrl'
	$rootScope.current = 'policy'

	# fetch()
]