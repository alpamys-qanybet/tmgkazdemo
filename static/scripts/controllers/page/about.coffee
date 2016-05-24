angular.module('tmg').controller 'PageAboutCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'PageAboutCtrl'
	$rootScope.current = 'about'

	# fetch()
]