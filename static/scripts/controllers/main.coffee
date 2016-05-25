angular.module('tmg').controller 'MainCtrl', ['$scope', '$rootScope', '$cookies', '$locales', ($scope, $rootScope, $cookies, $locales)->
	$rootScope.covering = true

	$locales.changeLang $locales.current()

	$scope.navs = [
		name: 'about'
		url: 'about'
	,
		name: 'service'
		url: 'service'
	,
		name: 'equipment'
		url: 'equipment'
	,
		name: 'policy'
		url: 'policy'
	,
		name: 'certificate'
		url: 'certificate'
	,
		name: 'contact'
		url: 'contact'
	]

	$rootScope.equipments = [
		product: 'ZJ90DB'
		titleEn: 'drilling rig'
		titleRu: 'буровая установка'
		img: 'eq0.jpg'
	,
		product: 'ZJ70DB'
		titleEn: 'drilling rig'
		titleRu: 'буровая установка'
		img: 'eq1.jpg'
	,
		product: 'ZJ40'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq2.jpg'
	,
		product: 'ZJ30'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq3.jpg'
	,
		product: 'ZJ20'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq4.jpg'
	,
		product: 'SPC-600ST'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq5.jpg'
	]

	$rootScope.certificates = []
	$rootScope.certificates['ru'] = [
		name: 'ГОСТ Р ИСО 9001-2015 (ISO 9001:2015)'
	,
		name: 'ГОСТ 54934-2012 (OHSAS 18001:2007)'
	,
		name: 'ГОСТ Р ИСО 14001-2007 (ISO14001:2004)'
	]
	$rootScope.certificates['en'] = [
		name: 'GOST R ISO 9001-2015 (ISO 9001:2015)'
	,
		name: 'GOST 54934-2012 (OHSAS 18001:2007)'
	,
		name: 'ГОСТ Р ИСО 14001-2007 (ISO14001:2004)'
	]
	
	langProblem = (lng)->
		if lng == 'ru'
			jQuery('.heading h2').css('font-weight', '300')
			jQuery('.header-fixed .header-v5.header-fixed-shrink .navbar-nav > li > a').css('font-weight', '300')
			jQuery('.header-v5 .navbar-default .navbar-nav > li > a').css('font-weight', '300')
		else
			jQuery('.header-v5 .navbar-default .navbar-nav > li > a').css('font-weight', '400')
			jQuery('.header-fixed .header-v5.header-fixed-shrink .navbar-nav > li > a').css('font-weight', '400')
			jQuery('.heading h2').css('font-weight', '400')
	
	jQuery(document).ready ->
		langProblem $locales.current()

	# current url
	$rootScope.currentUrl = ->
		document.URL

	$scope.$watch  ->
		$cookies.get 'lng'
	,
		(newvalue,oldvalue)->
			# console.log 'lang changed ' + newvalue
			langProblem newvalue

	# .heading h2
	# .header-fixed .header-v5.header-fixed-shrink .navbar-nav > li > a
	# .header-v5 .navbar-default .navbar-nav > li > a 
]