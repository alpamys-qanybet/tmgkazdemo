angular.module('tmg').controller 'PageCertCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'PageCertCtrl'
	$rootScope.current = 'certificate'
	# fetch()
]