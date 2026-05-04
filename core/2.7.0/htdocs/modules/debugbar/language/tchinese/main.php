<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: zh_TW

define('_MD_DEBUGBAR_DEBUG', '除錯');
define('_MD_DEBUGBAR_INCLUDED_FILES', '已引入檔案');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP 版本');
define('_MD_DEBUGBAR_NONE', '無');
define('_MD_DEBUGBAR_ERRORS', '錯誤');
define('_MD_DEBUGBAR_DEPRECATED', '已棄用');
define('_MD_DEBUGBAR_QUERIES', '查詢');
define('_MD_DEBUGBAR_BLOCKS', '區塊');
define('_MD_DEBUGBAR_EXTRA', '擴充');
define('_MD_DEBUGBAR_TIMERS', '計時器');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s 載入耗時 %s 秒。');
define('_MD_DEBUGBAR_TOTAL', '總計');
define('_MD_DEBUGBAR_NOT_CACHED', '未快取');
define('_MD_DEBUGBAR_CACHED', '已快取（每 %s 秒重新產生）');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '（空字串）');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', '布林 TRUE');
define('_MD_DEBUGBAR_BOOL_FALSE', '布爾 FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', '資料庫查詢');
define('_MD_DEBUGBAR_MEMORY_USAGE', '記憶體使用量');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d 查詢');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '（%d 重複項）');
define('_MD_DEBUGBAR_BYTES', '%s 位元組');
define('_MD_DEBUGBAR_DB_VERSION', '%s 版本');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- 錯誤編號：%s 錯誤訊息：%s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- 錯誤#%s：%s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', '例外');
define('_MD_DEBUGBAR_RAY_QUERY', '查詢#%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', '慢');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', '區塊（快取 %ds）');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', '區塊（未快取）');
define('_MD_DEBUGBAR_RAY_DUMP', '轉儲');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', '範本上下文');
define('_MD_DEBUGBAR_RAY_NO_VARS', '（無範本變數）');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d 變數)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', '目錄“modules/debugbar/%s”未創建');
define('_MD_DEBUGBAR_ERR_DIR_COPY', '資產複製期間無法建立目錄“%s”');
