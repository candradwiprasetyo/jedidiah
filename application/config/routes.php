<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login";
$route['dashboard'] = 'home/dashboard';
$route['master'] = 'home/master';
$route['transaction/(:any)'] = 'home/transaction/$1';

$route['master/company'] = 'master/company';
$route['master/employee'] = 'master/employee';
$route['master/legalities'] = 'master/legalities';
$route['master/costumer'] = 'master/costumer';

$route['master/region'] = 'master/region';
$route['master/port'] = 'master/port';
$route['master/incoterm'] = 'master/incoterm';
$route['master/currency'] = 'master/currency';
$route['master/payment'] = 'master/payment';
$route['master/position'] = 'master/position';
$route['master/cargo'] = 'master/cargo';
$route['master/document'] = 'master/document';
$route['master/sectioncommodity'] = 'master/sectioncommodity';
$route['master/commodity'] = 'master/commodity';
$route['master/packaging'] = 'master/packaging';
$route['master/unit'] = 'master/unit';
$route['master/charge'] = 'master/charge';
$route['master/clearence'] = 'master/clearence';
$route['master/container'] = 'master/container';
$route['master/truckdriver'] = 'master/truckdriver';
$route['master/trucktype'] = 'master/trucktype';
$route['master/truck'] = 'master/truck';
$route['master/vessel'] = 'master/vessel';
$route['master/movement'] = 'master/movement';

$route['country/getall'] = 'baseclass/countryclass';
$route['country/commit'] = 'baseclass/countryclass/commit';
$route['country/delete/(:any)'] = 'baseclass/countryclass/delete/$1';
$route['country/getrow/(:any)'] = 'baseclass/countryclass/getrow/$1';

$route['city/getall'] = 'baseclass/cityclass';
$route['city/bycountry/(:any)'] = 'baseclass/cityclass/bycountry/$1';
$route['city/commit'] = 'baseclass/cityclass/commit';
$route['city/delete/(:any)'] = 'baseclass/cityclass/delete/$1';
$route['city/getrow/(:any)'] = 'baseclass/cityclass/getrow/$1';

$route['area/getall'] = 'baseclass/areaclass';
$route['area/bycity/(:any)'] = 'baseclass/areaclass/bycity/$1';
$route['area/commit'] = 'baseclass/areaclass/commit';
$route['area/delete/(:any)'] = 'baseclass/areaclass/delete/$1';
$route['area/getrow/(:any)'] = 'baseclass/areaclass/getrow/$1';

$route['seaport/getall'] = 'baseclass/seaportclass';
$route['seaport/bycity/(:any)'] = 'baseclass/seaportclass/bycity/$1';
$route['seaport/bycountry/(:any)'] = 'baseclass/seaportclass/bycountry/$1';
$route['seaport/commit'] = 'baseclass/seaportclass/commit';
$route['seaport/delete/(:any)'] = 'baseclass/seaportclass/delete/$1';
$route['seaport/getrow/(:any)'] = 'baseclass/seaportclass/getrow/$1';

$route['airport/getall'] = 'baseclass/airportclass';
$route['airport/bycity/(:any)'] = 'baseclass/airportclass/bycity/$1';
$route['airport/commit'] = 'baseclass/airportclass/commit';
$route['airport/delete/(:any)'] = 'baseclass/airportclass/delete/$1';
$route['airport/getrow/(:any)'] = 'baseclass/airportclass/getrow/$1';

$route['incoterm/getall'] = 'baseclass/incotermclass';
$route['incoterm/commit'] = 'baseclass/incotermclass/commit';
$route['incoterm/delete/(:any)'] = 'baseclass/incotermclass/delete/$1';
$route['incoterm/getrow/(:any)'] = 'baseclass/incotermclass/getrow/$1';

$route['currency/getall'] = 'baseclass/currencyclass';
$route['currency/commit'] = 'baseclass/currencyclass/commit';
$route['currency/delete/(:any)'] = 'baseclass/currencyclass/delete/$1';
$route['currency/getrow/(:any)'] = 'baseclass/currencyclass/getrow/$1';

$route['exchange/getall'] = 'baseclass/exchangeclass';
$route['exchange/commit'] = 'baseclass/exchangeclass/commit';
$route['exchange/delete/(:any)'] = 'baseclass/exchangeclass/delete/$1';
$route['exchange/getrow/(:any)'] = 'baseclass/exchangeclass/getrow/$1';

$route['payment/getall'] = 'baseclass/paymentclass';
$route['payment/commit'] = 'baseclass/paymentclass/commit';
$route['payment/delete/(:any)'] = 'baseclass/paymentclass/delete/$1';
$route['payment/getrow/(:any)'] = 'baseclass/paymentclass/getrow/$1';

$route['position/getall'] = 'baseclass/positionclass';
$route['position/commit'] = 'baseclass/positionclass/commit';
$route['position/delete/(:any)'] = 'baseclass/positionclass/delete/$1';
$route['position/getrow/(:any)'] = 'baseclass/positionclass/getrow/$1';

$route['division/getall'] = 'baseclass/divisionclass';
$route['division/byposition/(:any)'] = 'baseclass/divisionclass/byposition/$1';
$route['division/commit'] = 'baseclass/divisionclass/commit';
$route['division/delete/(:any)'] = 'baseclass/divisionclass/delete/$1';
$route['division/getrow/(:any)'] = 'baseclass/divisionclass/getrow/$1';

$route['department/getall'] = 'baseclass/departmentclass';
$route['department/bydivision/(:any)'] = 'baseclass/departmentclass/bydivision/$1';
$route['department/commit'] = 'baseclass/departmentclass/commit';
$route['department/delete/(:any)'] = 'baseclass/departmentclass/delete/$1';
$route['department/getrow/(:any)'] = 'baseclass/departmentclass/getrow/$1';

$route['cargo/getall'] = 'baseclass/cargoclass';
$route['cargo/commit'] = 'baseclass/cargoclass/commit';
$route['cargo/delete/(:any)'] = 'baseclass/cargoclass/delete/$1';
$route['cargo/getrow/(:any)'] = 'baseclass/cargoclass/getrow/$1';

$route['document/getall'] = 'baseclass/documentclass';
$route['document/commit'] = 'baseclass/documentclass/commit';
$route['document/delete/(:any)'] = 'baseclass/documentclass/delete/$1';
$route['document/getrow/(:any)'] = 'baseclass/documentclass/getrow/$1';

$route['sectioncommodity/getall'] = 'baseclass/sectionclass';
$route['sectioncommodity/commit'] = 'baseclass/sectionclass/commit';
$route['sectioncommodity/delete/(:any)'] = 'baseclass/sectionclass/delete/$1';
$route['sectioncommodity/getrow/(:any)'] = 'baseclass/sectionclass/getrow/$1';

$route['packaging/getall'] = 'baseclass/packageclass';
$route['packaging/commit'] = 'baseclass/packageclass/commit';
$route['packaging/delete/(:any)'] = 'baseclass/packageclass/delete/$1';
$route['packaging/getrow/(:any)'] = 'baseclass/packageclass/getrow/$1';

$route['unit/getall'] = 'baseclass/unitclass';
$route['unit/commit'] = 'baseclass/unitclass/commit';
$route['unit/delete/(:any)'] = 'baseclass/unitclass/delete/$1';
$route['unit/getrow/(:any)'] = 'baseclass/unitclass/getrow/$1';

$route['charge/getall'] = 'baseclass/chargeclass';
$route['charge/commit'] = 'baseclass/chargeclass/commit';
$route['charge/delete/(:any)'] = 'baseclass/chargeclass/delete/$1';
$route['charge/getrow/(:any)'] = 'baseclass/chargeclass/getrow/$1';

$route['clearence/getall'] = 'baseclass/clearenceclass';
$route['clearence/commit'] = 'baseclass/clearenceclass/commit';
$route['clearence/delete/(:any)'] = 'baseclass/clearenceclass/delete/$1';
$route['clearence/getrow/(:any)'] = 'baseclass/clearenceclass/getrow/$1';

$route['company/getall'] = 'baseclass/companyclass';
$route['company/commit'] = 'baseclass/companyclass/commit';
$route['company/delete/(:any)'] = 'baseclass/companyclass/delete/$1';
$route['company/getrow/(:any)'] = 'baseclass/companyclass/getrow/$1';

$route['commodity/getall'] = 'baseclass/commodityclass';
$route['commodity/commit'] = 'baseclass/commodityclass/commit';
$route['commodity/delete/(:any)'] = 'baseclass/commodityclass/delete/$1';
$route['commodity/getrow/(:any)'] = 'baseclass/commodityclass/getrow/$1';

$route['containersize/getall'] = 'baseclass/containersizeclass';
$route['containersize/commit'] = 'baseclass/containersizeclass/commit';
$route['containersize/delete/(:any)'] = 'baseclass/containersizeclass/delete/$1';
$route['containersize/getrow/(:any)'] = 'baseclass/containersizeclass/getrow/$1';

$route['containertype/getall'] = 'baseclass/containertypeclass';
$route['containertype/commit'] = 'baseclass/containertypeclass/commit';
$route['containertype/delete/(:any)'] = 'baseclass/containertypeclass/delete/$1';
$route['containertype/delete/(:any)'] = 'baseclass/containertypeclass/delete/$1';
$route['containertype/getrow/(:any)'] = 'baseclass/containertypeclass/getrow/$1';

$route['employee/getall'] = 'baseclass/employeeclass';
$route['employee/commit'] = 'baseclass/employeeclass/commit';
$route['employee/delete/(:any)'] = 'baseclass/employeeclass/delete/$1';
$route['employee/getrow/(:any)'] = 'baseclass/employeeclass/getrow/$1';
$route['employee/getmarketing'] = 'baseclass/employeeclass/getmarketing';


$route['legalities/getall'] = 'baseclass/legalitiesclass';
$route['legalities/commit'] = 'baseclass/legalitiesclass/commit';
$route['legalities/delete/(:any)'] = 'baseclass/legalitiesclass/delete/$1';
$route['legalities/getrow/(:any)'] = 'baseclass/legalitiesclass/getrow/$1';

$route['costumer/getall'] = 'baseclass/costumerclass';
$route['costumer/getby/(:any)'] = 'baseclass/costumerclass/getby/$1';
$route['costumer/getbynotify'] = 'baseclass/costumerclass/getbynotify';
$route['costumer/getforshippingdoc'] = 'baseclass/costumerclass/getforshippingdoc';
$route['costumer/commit'] = 'baseclass/costumerclass/commit';
$route['costumer/delete/(:any)'] = 'baseclass/costumerclass/delete/$1';
$route['costumer/getrow/(:any)'] = 'baseclass/costumerclass/getrow/$1';

$route['truckdriver/getall'] = 'baseclass/truckdriverclass';
$route['truckdriver/commit'] = 'baseclass/truckdriverclass/commit';
$route['truckdriver/delete/(:any)'] = 'baseclass/truckdriverclass/delete/$1';
$route['truckdriver/getrow/(:any)'] = 'baseclass/truckdriverclass/getrow/$1';
$route['truckdriver/getbylevel/(:any)/(:any)'] = 'baseclass/truckdriverclass/getby/$1/$2';


$route['trucktype/getall'] = 'baseclass/trucktypeclass';
$route['trucktype/commit'] = 'baseclass/trucktypeclass/commit';
$route['trucktype/delete/(:any)'] = 'baseclass/trucktypeclass/delete/$1';
$route['trucktype/getrow/(:any)'] = 'baseclass/trucktypeclass/getrow/$1';

$route['truckdetail/getall'] = 'baseclass/truckdetailclass';
$route['truckdetail/getby/(:any)/(:any)'] = 'baseclass/truckdetailclass/getby/$1/$2';
$route['truckdetail/commit'] = 'baseclass/truckdetailclass/commit';
$route['truckdetail/delete/(:any)'] = 'baseclass/truckdetailclass/delete/$1';
$route['truckdetail/getrow/(:any)'] = 'baseclass/truckdetailclass/getrow/$1';

$route['vessel/getall'] = 'baseclass/vesselclass';
$route['vessel/commit'] = 'baseclass/vesselclass/commit';
$route['vessel/delete/(:any)'] = 'baseclass/vesselclass/delete/$1';
$route['vessel/getrow/(:any)'] = 'baseclass/vesselclass/getrow/$1';

$route['movement/getall'] = 'baseclass/movementclass';
$route['movement/commit'] = 'baseclass/movementclass/commit';
$route['movement/delete/(:any)'] = 'baseclass/movementclass/delete/$1';
$route['movement/getrow/(:any)'] = 'baseclass/movementclass/getrow/$1';


$route['joborder/service'] = 'transaction/joborder/service';
$route['joborder/service/(:any)'] = 'transaction/joborder/service/$1';
$route['joborder/service/(:any)/(:any)'] = 'transaction/joborder/service/$1/$2';

$route['joborder/handling'] = 'transaction/joborder/handling';
$route['joborder/handling/(:any)'] = 'transaction/joborder/handling/$1';
$route['joborder/handling/(:any)/(:any)'] = 'transaction/joborder/handling/$1/$2';

$route['joborder/monitoring'] = 'transaction/joborder/monitoring';
$route['joborder/monitoring/(:any)'] = 'transaction/joborder/monitoring/$1';

$route['joborder'] = 'baseclass/joborderclass';
$route['joborder/commit'] = 'baseclass/joborderclass/commit';
$route['joborder/commit/(:any)'] = 'baseclass/joborderclass/commit/$1';
$route['joborder/getbydetail/(:any)/(:num)'] = 'baseclass/joborderclass/getbydetail/$1/$2';
$route['joborder/commitdetail/(:any)'] = 'baseclass/joborderclass/commitdetail/$1';
$route['joborder/delete/(:any)'] = 'baseclass/joborderclass/delete/$1';

// transaction rate management
$route['ratemanagement/getall'] = 'baseclass/ratemanagementclass';
$route['ratemanagement/getmarketing'] = 'baseclass/ratemanagementclass/getmarketing';
$route['ratemanagement/getagent'] = 'baseclass/ratemanagementclass/getagent';
$route['ratemanagement/commitdetail'] = 'baseclass/ratemanagementclass/commitdetail';
$route['ratemanagement/commitie'] = 'baseclass/ratemanagementclass/commitie';
$route['ratemanagement/commitnote'] = 'baseclass/ratemanagementclass/commitnote';


$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */