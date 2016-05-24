angular.module('tmg').controller 'PageEquipmentCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'PageEquipmentCtrl'
	$rootScope.current = 'equipment'

	$rootScope.items = [
		product: 'ZJ90DB'
		titleEn: 'drilling rig'
		titleRu: 'буровая установка'
		img: 'eq0.jpg'
		illustration: 'eq0'
		left: 3
		right: 9
		props: [
			nameEn: 'Maximum drilling depth'
			nameRu: 'Максимальная глубина бурения'
			valueEn: '9000 m.(meter)'
			valueRu: '9000 м.(метр)'
		,
			nameEn: 'Maximum carrying capacity'
			nameRu: 'Максимальная грузоподъемность'
			valueEn: '675 t.(tone)'
			valueRu: '675 т.(тонн)'
		,
			nameEn: 'Winch power'
			nameRu: 'Мощность лебедки'
			valueEn: '3000 h.p.(horse power)'
			valueRu: '3000 л.с.(лошадиных сил)'
		,
			nameEn: 'Number and power of pumps'
			nameRu: 'Количество и мощность насосов'
			valueEn: '3х1600 h.p.'
			valueRu: '3х1600 л.с.'
		,
			nameEn: 'САТ3512В main generator number/power'
			nameRu: 'Количество\\мощность основных генераторов САТ3512В'
			valueEn: '5/1200 кW(kilo Watt)'
			valueRu: '5/1200 кВт(кило Ватт)'
		,
			nameEn: 'САТ С18 auxiliary generator number/power'
			nameRu: 'Количество\\мощность дополнительных генераторов САТ С18'
			valueEn: '1/500 кW'
			valueRu: '1/500 кВт'
		,
			nameEn: 'Varco TDS-11SA top drive'
			nameRu: 'Bерхний привод Varco TDS-11SA'
			valueEn: '500 t.'
			valueRu: '500 т.'
		,
			nameEn: 'Derrick circulating system volume'
			nameRu: 'Объем циркуляционной системы Derrick'
			valueEn: '550 m'
			valueRu: '550 м'
			isVolume: true
		,
			nameEn: 'Transmission mode'
			nameRu: 'Режим передачи'
			valueEn: 'AC-VFD-AC'
			valueRu: 'AC-VFD-AC'
		]
	,
		product: 'ZJ70DB'
		titleEn: 'drilling rig'
		titleRu: 'буровая установка'
		img: 'eq1.jpg'
		illustration: 'eq1'
		left: 3
		right: 9
		props: [
			nameEn: 'Maximum drilling depth'
			nameRu: 'Максимальная глубина бурения'
			valueEn: '7000 m.'
			valueRu: '7000 м.'
		,
			nameEn: 'Maximum carrying capacity'
			nameRu: 'Максимальная грузоподъемность'
			valueEn: '450 t.'
			valueRu: '450 т.'
		,
			nameEn: 'Winch power'
			nameRu: 'Мощность лебедки'
			valueEn: '2000 h.p.'
			valueRu: '2000 л.с.'
		,
			nameEn: 'Number and power of pumps'
			nameRu: 'Количество и мощность насосов'
			valueEn: '3х1600 h.p.'
			valueRu: '3х1600 л.с.'
		,
			nameEn: 'САТ3512В main generator number/power'
			nameRu: 'Количество\\мощность основных генераторов САТ3512В'
			valueEn: '4/1200 кW'
			valueRu: '4/1200 кВт'
		,
			nameEn: 'САТ С18 auxiliary generator number/power'
			nameRu: 'Количество\\мощность дополнительных генераторов САТ С18'
			valueEn: '1/500 кW'
			valueRu: '1/500 кВт'
		,
			nameEn: 'Varco TDS-11SA top drive'
			nameRu: 'Bерхний привод Varco TDS-11SA'
			valueEn: '500 t.'
			valueRu: '500 т.'
		,
			nameEn: 'Derrick circulating system volume'
			nameRu: 'Объем циркуляционной системы Derrick'
			valueEn: '340 m'
			valueRu: '340 м'
			isVolume: true
		,
			nameEn: 'Transmission mode'
			nameRu: 'Режим передачи'
			valueEn: 'AC-VFD-AC'
			valueRu: 'AC-VFD-AC'
		]
	,
		product: 'ZJ40'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq2.jpg'
		illustration: 'eq2'
		left: 6
		right: 6
		props: [
			nameEn: 'Maximum drilling depth'
			nameRu: 'Максимальная глубина бурения'
			valueEn: '4000 m.'
			valueRu: '4000 м.'
		,
			nameEn: 'Maximum carrying capacity'
			nameRu: 'Максимальная грузоподъемность'
			valueEn: '2250 кН(kiloHenry)'
			valueRu: '2250 кГн(кило Генри)'
		,
			nameEn: 'Winch power'
			nameRu: 'Мощность лебедки'
			valueEn: '1000 h.p.'
			valueRu: '1000 л.с.'
		,
			nameEn: 'Number and power of drilling pumps'
			nameRu: 'Количество и мощность буровых насосов'
			valueEn: '2х1000 h.p.'
			valueRu: '2х1000 л.с.'
		,
			nameEn: 'САТ С15/C18 main generator number/power'
			nameRu: 'Кол\\мощность осн генераторов САТ С15/C18'
			valueEn: '2x 470 kW'
			valueRu: '2x 470 кВт'
		,
			nameEn: 'Volvo generator number/power'
			nameRu: 'Количество и мощность генeратора Volvo'
			valueEn: '2x400 kW'
			valueRu: '2x400 кВт'
		,
			nameEn: 'circulating system volume'
			nameRu: 'Объем Циркулярной системы'
			valueEn: '240 m'
			valueRu: '240 м'
			isVolume: true
		,
			nameEn: 'Allison Transmission'
			nameRu: 'Трансмиссия Allison'
			valueEn: '2x634 kW'
			valueRu: '2x634 кВт'
		]
	,
		product: 'ZJ30'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq3.jpg'
		illustration: 'eq3'
		left: 3
		right: 9
		props: [
			nameEn: 'Maximum drilling depth'
			nameRu: 'Максимальная глубина бурения'
			valueEn: '3000 m.'
			valueRu: '3000 м.'
		,
			nameEn: 'Maximum carrying capacity'
			nameRu: 'Максимальная грузоподъемность'
			valueEn: '1800 кН'
			valueRu: '1800 кГн'
		,
			nameEn: 'Winch power'
			nameRu: 'Мощность лебедки'
			valueEn: '750 h.p.'
			valueRu: '750 л.с.'
		,
			nameEn: 'Number and power of drilling pumps'
			nameRu: 'Количество и мощность буровых насосов'
			valueEn: '2х800 h.p.'
			valueRu: '2х800 л.с.'
		,
			nameEn: 'САТ С15/C18 main generator number/power'
			nameRu: 'Количество\\мощность основных генераторов САТ С15/C18'
			valueEn: '2x397 kW'
			valueRu: '2x397 кВт'
		,
			nameEn: 'Volvo generator number/power'
			nameRu: 'Количество и мощность генeратора Volvo'
			valueEn: '2x300 kW'
			valueRu: '2x300 кВт'
		,
			nameEn: 'circulating system volume'
			nameRu: 'Объем Циркулярной системы'
			valueEn: '180 m'
			valueRu: '180 м'
			isVolume: true
		,
			nameEn: 'Allison Transmission'
			nameRu: 'Трансмиссия Allison'
			valueEn: '2x410 kW'
			valueRu: '2x410 кВт'
		]
	,
		product: 'ZJ20'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq4.jpg'
		illustration: 'eq4'
		left: 3
		right: 9
		props: [
			nameEn: 'Maximum drilling depth'
			nameRu: 'Максимальная глубина бурения'
			valueEn: '2000 m.'
			valueRu: '2000 м.'
		,
			nameEn: 'Maximum carrying capacity'
			nameRu: 'Максимальная грузоподъемность'
			valueEn: '158 t.'
			valueRu: '158 т.'
		,
			nameEn: 'Winch power'
			nameRu: 'Мощность лебедки'
			valueEn: '600 h.p.'
			valueRu: '600 л.с.'
		,
			nameEn: 'Number and power of drilling pumps'
			nameRu: 'Количество и мощность буровых насосов'
			valueEn: '2х800 h.p.'
			valueRu: '2х800 л.с.'
		,
			nameEn: 'Volvo main generator number/power'
			nameRu: 'Количество\\мощность основных генераторов Volvo'
			valueEn: '1x300 kW'
			valueRu: '1x300 кВт'
		,
			nameEn: 'Volvo generator number/power'
			nameRu: 'Количество и мощность генeратора Volvo'
			valueEn: '1x300 kW'
			valueRu: '1x300 кВт'
		,
			nameEn: 'circulating system volume'
			nameRu: 'Объем Циркулярной системы'
			valueEn: '180 m'
			valueRu: '180 м'
			isVolume: true
		,
			nameEn: 'Transfer mode'
			nameRu: 'Режим передачи'
			valueEn: 'Mechanical'
			valueRu: 'Механический'
		]
	,
		product: 'SPC-600ST'
		titleEn: 'mobile drilling rig'
		titleRu: 'мобильная буровая установка'
		img: 'eq5.jpg'
		illustration: 'eq5'
		left: 5
		right: 7
		props: [
			nameEn: 'Maximum drilling depth'
			nameRu: 'Максимальная глубина бурения'
			valueEn: '600 m.'
			valueRu: '600 м.'
		,
			nameEn: 'Maximum carrying capacity'
			nameRu: 'Максимальная грузоподъемность'
			valueEn: '25 t.'
			valueRu: '25 т.'
		,
			nameEn: 'Diesel BF6L913CG13'
			nameRu: 'Дизель BF6L913CG13'
			valueEn: '141kW/2500r/min(revolution per minute)'
			valueRu: '141кВт/2500об/мин(оборотов в минуту)'
		,
			nameEn: 'Model drilling pump'
			nameRu: 'Модель бурового насоса'
			valueEn: 'BW1100'
			valueRu: 'BW1100'
		,
			nameEn: 'Maximum diameter of the trunk'
			nameRu: 'Максимальный диаметер ствола'
			valueEn: '500 mm.'
			valueRu: '500 мм.'
		,
			nameEn: 'Height of drilling mast'
			nameRu: 'Высота буровой мачты'
			valueEn: '15m'
			valueRu: '15м'
		,
			nameEn: 'Climbing system'
			nameRu: 'Подъемная система'
			valueEn: '3×4'
			valueRu: '3×4'
		,
			nameEn: 'Hydraulic oil pump'
			nameRu: 'Гидравлический масляный насос'
			valueEn: 'GPC4-50'
			valueRu: 'GPC4-50'
		]
	]
	# fetch()
]