<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showIndex', 'as' => 'showIndex'));


/*  Angular Route Mapping   */
Route::get('/admin/main', array('uses' => 'AngularRouteController@showMain', 'as' => 'showMain'));


//member
Route::get('/member/membership_info', array('uses' => 'AngularRouteController@showMemberInfo', 'as' => 'showConnSetup'));
Route::get('/member/membership_structure', array('uses' => 'AngularRouteController@showMemberStructure', 'as' => 'showConnSetup'));
Route::get('/member/subscription_code', array('uses' => 'AngularRouteController@showSubscriptionCode', 'as' => 'showConnSetup'));



//login //
Route::get('/login/login_history', array('uses' => 'AngularRouteController@showLoginHistory', 'as' => 'showConnSetup'));
Route::get('/login/current_users_messages', array('uses' => 'AngularRouteController@showCurrentUsersMessages', 'as' => 'showConnSetup'));
Route::get('/login/sms_log', array('uses' => 'AngularRouteController@showSmsLog', 'as' => 'showConnSetup'));
Route::get('/login/ip_info', array('uses' => 'AngularRouteController@showIpInfo', 'as' => 'showConnSetup'));
Route::get('/login/subscribe', array('uses' => 'AngularRouteController@showSubscribe', 'as' => 'showConnSetup'));

//pay
Route::get('/pay/charge_mngmnt', array('uses' => 'AngularRouteController@showChargeManagement', 'as' => 'showConnSetup'));
Route::get('/pay/exchange', array('uses' => 'AngularRouteController@showExchange', 'as' => 'showConnSetup'));
Route::get('/pay/money_use_log', array('uses' => 'AngularRouteController@showMoneyUseLog', 'as' => 'showConnSetup'));
Route::get('/pay/point_use_log', array('uses' => 'AngularRouteController@showPointUseLog', 'as' => 'showConnSetup'));
Route::get('/pay/betting_stat', array('uses' => 'AngularRouteController@showBettingStat', 'as' => 'showConnSetup'));

//Game Management
Route::get('/game/game-mng-cat', array('uses' => 'AngularRouteController@showGameManageCategory', 'as' => 'showConnSetup'));
Route::get('/game/betting-list', array('uses' => 'AngularRouteController@showBettingList', 'as' => 'showConnSetup'));

// Service
Route::get('/service/customer_center', array('uses' => 'AngularRouteController@showCustomerCenter', 'as' => 'showConnSetup'));
Route::get('/service/notice_event', array('uses' => 'AngularRouteController@showNoticeEvent', 'as' => 'showConnSetup'));


//site
Route::get('/site/admin_settings', array('uses' => 'AngularRouteController@showSite', 'as' => 'showSite'));
Route::get('/site/connection_setup', array('uses' => 'AngularRouteController@showConnSetup', 'as' => 'showConnSetup'));
Route::get('/site/account-settings', array('uses' => 'AngularRouteController@showAccountSettings', 'as' => 'showConnSetup'));
Route::get('/site/account-settings', array('uses' => 'AngularRouteController@showAccountSettings', 'as' => 'showConnSetup'));
Route::get('/site/set_min_max_acc', array('uses' => 'AngularRouteController@showSetMinMaxAcc', 'as' => 'showConnSetup'));
Route::get('/site/ratio_setting_by_event', array('uses' => 'AngularRouteController@showRatioSettingByEvent', 'as' => 'showConnSetup'));


//Content
Route::get('/content/banner-mng', array('uses' => 'AngularRouteController@showBannerManage', 'as' => 'showConnSetup'));
Route::get('/content/popup-mng', array('uses' => 'AngularRouteController@showPopupManage', 'as' => 'showConnSetup'));
Route::get('/content/faq-mng', array('uses' => 'AngularRouteController@showFaqManage', 'as' => 'showConnSetup'));

//Statistics

Route::get('/stats/stats_by_date', array('uses' => 'AngularRouteController@showStatisticsByDate', 'as' => 'showConnSetup'));
Route::get('/stats/statistics_by_category', array('uses' => 'AngularRouteController@showStatisticsByCategory', 'as' => 'showConnSetup'));
Route::get('/stats/foreign_company_stats', array('uses' => 'AngularRouteController@showForeignCompanyStatistics', 'as' => 'showConnSetup'));
Route::get('/stats/member_stats', array('uses' => 'AngularRouteController@showMemberStatistics', 'as' => 'showConnSetup'));
Route::get('/stats/mem_hit_rate', array('uses' => 'AngularRouteController@showMemberHitRate', 'as' => 'showConnSetup'));
Route::get('/stats/top_dividend_stats', array('uses' => 'AngularRouteController@showTopDividendStats', 'as' => 'showConnSetup'));
Route::get('/stats/payment_settlement', array('uses' => 'AngularRouteController@showPaymentSettlement', 'as' => 'showConnSetup'));
Route::get('/stats/settlement_by_deposit', array('uses' => 'AngularRouteController@showSettlementByDeposit', 'as' => 'showConnSetup'));
Route::get('/stats/folder_distribution', array('uses' => 'AngularRouteController@showFolderDistribution', 'as' => 'showConnSetup'));
Route::get('/stats/mem_odds_stats', array('uses' => 'AngularRouteController@showMemberOddsStatistics', 'as' => 'showConnSetup'));

/*  Sites API               */
Route::get('/api/get-all-sites', array('uses' => 'HomeController@showGetSites', 'as' => 'showGetSites'));
Route::post('api/post-save-sites', array('uses' => 'HomeController@addSaveSites', 'as' => 'addSaveSites'));
Route::post('api/post-save-urls', array('uses' => 'HomeController@addSaveUrl', 'as' => 'addSaveUrl'));
Route::post('api/post-delete-urls', array('uses' => 'HomeController@deleteUrlSites', 'as' => 'deleteUrlSites'));
Route::get('api/delete-url/{su_seq}', array('uses' => 'HomeController@deleteUrl', 'as' => 'deleteUrl'));
