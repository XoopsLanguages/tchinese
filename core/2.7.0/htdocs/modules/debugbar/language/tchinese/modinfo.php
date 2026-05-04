<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: zh_TW

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', '使用 PHP DebugBar 進行錯誤報告和效能分析');

define('_MI_DEBUGBAR_ENABLE', '顯示 DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', '啟用 Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', '啟用已引入檔案索引標籤');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', '顯示請求期間載入的所有 PHP 檔案');
define('_MI_DEBUGBAR_SLOWQUERY', '慢查詢閾值（秒）');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', '比此更慢的查詢將以紅色醒目顯示（例如 0.05 = 50ms）');

define('_MI_DEBUGBAR_QUERYMODE',      '查詢日誌');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  '顯示所有查詢，或僅顯示慢查詢和錯誤');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  '所有查詢');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', '僅慢查詢和錯誤');

define('_MI_DEBUGBAR_RAY_ENABLE', '啟用 Ray 整合');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', '將除錯資料傳送至 Ray 桌面應用程式（需要 spatie/ray）');

define('_MI_DEBUGBAR_ADMENU1', '首頁');
define('_MI_DEBUGBAR_MENU_ABOUT', '關於');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', '返回管理 ');
\define('_MI_DEBUGBAR_OVERVIEW', '概覽');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', '免責聲明');
\define('_MI_DEBUGBAR_LICENSE', '授權');
\define('_MI_DEBUGBAR_SUPPORT', '支援');
