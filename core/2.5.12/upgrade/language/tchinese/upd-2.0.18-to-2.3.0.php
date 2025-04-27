<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

efine('LEGEND_XOOPS_PATHS', 'XOOPS 實體路徑');
define('LEGEND_DATABASE', '資料庫字元集');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS 函式庫目錄');
define('XOOPS_LIB_PATH_HELP', 'XOOPS 函式庫目錄的實體路徑，尾部不加斜線，以確保向前相容性。將此資料夾置於 ' . XOOPS_ROOT_PATH . ' 之外，以提高安全性。');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS 資料檔案目錄');
define('XOOPS_DATA_PATH_HELP', 'XOOPS 資料檔案（可寫入）目錄的實體路徑，尾部不加斜線，以確保向前相容性。將此資料夾置於 ' . XOOPS_ROOT_PATH . ' 之外，以提高安全性。');

define('DB_COLLATION_LABEL', '資料庫字元集與排序規則');
define('DB_COLLATION_HELP', "自 MySQL 4.12 起支援自訂字元集與排序規則。然而，這比預期的複雜，因此除非您對自己的選擇非常有信心，否則請勿進行任何變更。");
define('DB_COLLATION_NOCHANGE', '不變更');

define('XOOPS_PATH_FOUND', '路徑已找到。');
define('ERR_COULD_NOT_ACCESS', '無法存取指定的資料夾。請確認它存在且伺服器具有讀取權限。');
define('CHECKING_PERMISSIONS', '檢查檔案與目錄權限...');
define('ERR_NEED_WRITE_ACCESS', '伺服器必須具有下列檔案與資料夾的寫入權限<br>（例如在 UNIX/LINUX 伺服器上執行 <em>chmod 777 目錄名稱</em>）');
define('IS_NOT_WRITABLE', '%s 不可寫入。');
define('IS_WRITABLE', '%s 可寫入。');
define('ERR_COULD_NOT_WRITE_MAINFILE', '寫入內容至 mainfile.php 時發生錯誤，請手動將內容寫入 mainfile.php。');
