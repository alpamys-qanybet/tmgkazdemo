angular.module('tmg').controller 'PageServiceCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'PageServiceCtrl'
	$rootScope.current = 'service'

	# fetch()
]