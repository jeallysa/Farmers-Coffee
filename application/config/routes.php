<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*Login
$route['home'] = 'Home_Controller/index';
$route['admin'] = 'Home_Controller/admin';
$route['sales'] = 'Home_Controller/sales';
$route['inventory'] = 'Home_Controller/inventory';
$route['login'] = 'Login_Controller/login';
*/

/*Sales Module Routes*/
	$route['getSalesDashboard'] = 'salesDashboard';
	$route['getSellProduct'] = 'salesSellProduct';
	$route['getClients'] = 'salesClients';
	$route['getReturns'] = 'salesReturns';
	$route['getDeliveries'] = 'salesDelivery';
	$route['getReceivables'] = 'salesReceivables';
	$route['getCollections'] = 'salesCollections';
	$route['getSalesReports'] = 'salesReport';
	$route['getSalesUserProfile'] = 'salesUserProfile';
	$route['getSalesActivityLogs'] = 'salesActivityLogs';
	$route['getSalesChangePassword'] = 'salesChangePassword';
	$route['getSalesWalkin'] = 'salesSellProduct/salesWalkin';
	$route['getSalesClientsInfo'] = 'salesClients/salesClientsInfo';
	$route['getSalesContract'] = 'salesClients/salesContract';
	$route['getSalesCancel'] = 'salesDelivery/salesArchivedPO';
	$route['getMultipleOrders'] = 'salesMultipleOrders';
	$route['getMultipleOrdersMachine'] = 'salesMachineOrders';
 /*Inventory Module Routes*/
 	$route['getInventoryActivityLogs'] = 'inventoryActivityLogs';
	$route['getInventoryBlends'] = 'inventoryBlends';
	$route['getInventoryCategoryList'] = 'inventoryCategoryList';
	$route['getInventoryChangePassword'] = 'inventoryChangePassword';
	$route['getInventoryClientBlends'] = 'inventoryClientBlends';
	$route['getInventoryClientReturn'] = 'inventoryClientReturn';
	$route['getInventoryDashboard'] = 'inventoryDashboard';
	$route['getInventoryDashboardDateOut'] = 'inventoryDashboardDateOut';
	$route['getInventoryInventoryReport'] = 'inventoryInventoryReport';
	$route['getInventoryInventoryReport2'] = 'inventoryInventoryReport2';
	$route['getInventoryItemList'] = 'inventoryItemList';
	$route['getInventoryMachines'] = 'inventoryMachines';
	$route['getInventoryOutMachine'] = 'inventoryOutMachine';
	$route['getInventoryOutPackaging'] = 'inventoryOutPackaging';
	$route['getInventoryOutRawCoffee'] = 'inventoryOutRawCoffee';
	$route['getInventoryPackaging'] = 'inventoryPackaging';
	$route['getInventoryPOAdd'] = 'inventoryPOAdd';
	$route['getInventoryPOOrder'] = 'inventoryPOOrder';
	$route['getInventoryPOTransactionHistory'] = 'inventoryPOTransactionHistory';
	$route['getInventoryPOUnpaidDelivery'] = 'inventoryPOUnpaidDelivery';
	$route['getInventoryReturnsList'] = 'inventoryReturnsList';
	$route['getInventorySamplesList'] = 'inventorySamplesList';
	$route['getInventoryStickers'] = 'inventoryStickers';
	$route['getInventoryStocks'] = 'inventoryStocks';
	$route['getInventoryUser'] = 'inventoryUser';
 /*Admin Module Routes*/
 	$route['getAdminAccounts'] = 'adminAccounts';
    $route['getAdminActivityLogs'] = 'adminActivityLogs';
    $route['getAdminAddContract'] = 'adminAddContract';
    $route['getAdminBlends'] = 'adminBlends';
    $route['getAdminChangePassword'] = 'adminChangePassword';
    $route['getAdminClientBlends'] = 'adminClientBlends';
    $route['getAdminClients'] = 'adminClients';
    $route['getAdminCollectionReport'] = 'adminCollectionReport';
    $route['getAdminContract'] = 'adminContract';
    $route['getAdminDashboard'] = 'adminDashboard';
    $route['getAdminDeliveryReport'] = 'adminDeliveryReport';
    $route['getAdminInventoryReport'] = 'adminInventoryReport';
    $route['getAdminItemList'] = 'adminItemList';
    $route['getAdminMachines'] = 'adminMachines';
    $route['getAdminNewAccounts'] = 'adminNewAccounts';
    $route['getAdminNewClients'] = 'adminNewClients';
    $route['getAdminNewItem'] = 'adminNewItem';
    $route['getAdminNewSuppliers'] = 'adminNewSuppliers';
    $route['getAdminOrderReport'] = 'adminOrderReport';
    $route['getAdminPackaging'] = 'adminPackaging';
    $route['getAdminProductInventory'] = 'adminProductInventory';
    $route['getAdminProducts'] = 'adminProducts';
    $route['getAdminPurchaseOrder'] = 'adminPurchaseOrder';
    $route['getAdminReceivableReport'] = 'adminReceivableReport';
    $route['getAdminSales'] = 'adminSales';
    $route['getAdminSalesReport'] = 'adminSalesReport';
    $route['getAdminStickers'] = 'adminStickers';
    $route['getAdminSupplier'] = 'adminSupplier';
    $route['getAdminUser'] = 'adminUser';