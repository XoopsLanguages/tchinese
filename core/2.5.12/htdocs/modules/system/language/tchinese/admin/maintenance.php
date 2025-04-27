<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
//Nav
// 導覽
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER', '維護');
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST', '所有維護');
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP', '匯出');
define('_AM_SYSTEM_MAINTENANCE_SESSION', '清空會話表');
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK', '會話維護：成功');
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK', '會話維護：錯誤');
define('_AM_SYSTEM_MAINTENANCE_AVATAR', '清除未使用的自訂頭像');
define('_AM_SYSTEM_MAINTENANCE_CACHE', '清理快取資料夾');
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK', '快取維護：成功');
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK', '快取維護：錯誤');
define('_AM_SYSTEM_MAINTENANCE_TABLES', '資料表維護');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK', '資料表維護：成功');
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK', '資料表維護：錯誤');
define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC', '優化、檢查、修復和分析您的資料表');
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK', '維護資料庫：成功');
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK', '維護資料庫：錯誤');
define('_AM_SYSTEM_MAINTENANCE_CHOICE1', '優化資料表');
define('_AM_SYSTEM_MAINTENANCE_CHOICE2', '檢查資料表');
define('_AM_SYSTEM_MAINTENANCE_CHOICE3', '修復資料表');
define('_AM_SYSTEM_MAINTENANCE_CHOICE4', '分析資料表');
define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC', 'ANALYZE TABLE 分析並儲存資料表的鍵分佈。在分析期間，資料表會被加上讀取鎖定。<br>
CHECK TABLE 檢查一個或多個資料表是否存在錯誤。<br>
OPTIMIZE TABLE 用於回收未使用的空間並整理資料檔案的碎片。<br>
REPAIR TABLE 用於修復可能損壞的資料表。');
define('_AM_SYSTEM_MAINTENANCE_RESULT', '結果');
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT', '無結果');
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE', '清理快取任務');
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION', '清理會話表任務');
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY', '資料庫任務');
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR', '清除未使用頭像任務');
define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE', '未選擇維護項目');
define('_AM_SYSTEM_MAINTENANCE_TABLES1', '資料表');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE', '優化');
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK', '檢查');
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR', '修復');
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE', '分析');
// 匯出
define('_AM_SYSTEM_MAINTENANCE_DUMP', '匯出');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES', '選擇資料表或模組');
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP', "在匯出中加入 DROP TABLE IF EXISTS 'tables' 命令");
define('_AM_SYSTEM_MAINTENANCE_DUMP_OR', '或');
define('_AM_SYSTEM_MAINTENANCE_DUMP_AND', '和');
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES', '您必須選擇資料表或模組');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES', '無資料表');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES', '資料表');
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES', '結構');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS', '記錄數量');
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED', '檔案已創建');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT', '結果');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS', '筆記錄');
// 提示
define('_AM_SYSTEM_MAINTENANCE_TIPS', '<ul>
<li>您可以對您的 XOOPS 安裝進行簡單維護：清除快取和會話表，並對您的資料表進行維護</li>
</ul>');
