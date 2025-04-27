<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN', '');
define('_MD_A_MYMENU_MYBLOCKSADMIN', '權限');
define('_MD_A_MYMENU_MYPREFERENCES', '偏好設定');

// index.php
define('_AM_TH_DATETIME', '時間');
define('_AM_TH_USER', '使用者');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', '代理');
define('_AM_TH_TYPE', '類型');
define('_AM_TH_DESCRIPTION', '描述');
define('_AM_TH_BADIPS', '不良 IP<br><br><span style="font-weight:normal;">每行寫一個 IP<br>空白表示允許所有 IP</span>');
define('_AM_TH_GROUP1IPS', '允許 Group=1 的 IP<br><br><span style="font-weight:normal;">每行寫一個 IP。<br>192.168. 表示 192.168.*<br>空白表示允許所有 IP</span>');
define('_AM_LABEL_COMPACTLOG', '壓縮日誌');
define('_AM_BUTTON_COMPACTLOG', '壓縮！');
define('_AM_JS_COMPACTLOGCONFIRM', '重複的 (IP, 類型) 記錄將被移除');
define('_AM_LABEL_REMOVEALL', '移除所有記錄');
define('_AM_BUTTON_REMOVEALL', '全部移除！');
define('_AM_JS_REMOVEALLCONFIRM', '所有日誌將被完全移除。確定嗎？');
define('_AM_LABEL_REMOVE', '移除選中的記錄：');
define('_AM_BUTTON_REMOVE', '移除！');
define('_AM_JS_REMOVECONFIRM', '確定移除？');
define('_AM_MSG_IPFILESUPDATED', 'IP 檔案已更新');
define('_AM_MSG_BADIPSCANTOPEN', '不良 IP 檔案無法開啟');
define('_AM_MSG_GROUP1IPSCANTOPEN', '允許 Group=1 的檔案無法開啟');
define('_AM_MSG_REMOVED', '記錄已移除');
define('_AM_FMT_CONFIGSNOTWRITABLE', '請將 configs 目錄設為可寫：%s');

// prefix_manager.php
define('_AM_H3_PREFIXMAN', '前綴管理');
define('_AM_MSG_DBUPDATED', '資料庫更新成功！');
define('_AM_CONFIRM_DELETE', '所有資料將被刪除。確定嗎？');
define('_AM_TXT_HOWTOCHANGEDB', "如果您想更改前綴，<br>請手動編輯 %s/data/secure.php。<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");

// advisory.php
define('_AM_ADV_NOTSECURE', '不安全');
define('_AM_ADV_TRUSTPATHPUBLIC', '如果您可以看到圖片 -NG- 或連結返回正常頁面，則您的 XOOPS_TRUST_PATH 放置不正確。XOOPS_TRUST_PATH 的最佳位置是在 DocumentRoot 之外。如果您無法做到這一點，則必須在 XOOPS_TRUST_PATH 下放置 .htaccess (DENY FROM ALL) 作為次佳方案。');
define('_AM_ADV_TRUSTPATHPUBLICLINK', '檢查 TRUST_PATH 內的 PHP 檔案是否設為唯讀（必須是 404、403 或 500 錯誤）');
define('_AM_ADV_REGISTERGLOBALS', "如果設定為 'ON'，此設定將引發各種注入攻擊。如果可能，請在 php.ini 中將 'register_globals' 設為 off，或者如果無法做到，請在您的 XOOPS 目錄中創建或編輯 .htaccess：");
define('_AM_ADV_ALLOWURLFOPEN', "如果設定為 'ON'，此設定允許攻擊者在遠端伺服器上執行任意腳本。<br>只有管理員可以更改此選項。<br>如果您是管理員，請編輯 php.ini 或 httpd.conf。<br><b>httpd.conf 範例：<br>   php_admin_flag   allow_url_fopen   off</b><br>否則，請向您的管理員提出此要求。");
define('_AM_ADV_USETRANSSID', "如果設定為 'ON'，您的 Session ID 將顯示在錨標籤等中。<br>為防止會話劫持，請在 XOOPS_ROOT_PATH 中的 .htaccess 加入一行：<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX', "此設定容易引發 'SQL 注入'。<br>請不要忘記在模組偏好設定中開啟 '強制過濾 *'。");
define('_AM_ADV_LINK_TO_PREFIXMAN', '前往前綴管理');
define('_AM_ADV_MAINUNPATCHED', '您應該按照 README 中的說明編輯您的 mainfile.php。');
define('_AM_ADV_DBFACTORYPATCHED', '您的 databasefactory 已準備好進行 DBLayer Trapping 防 SQL 注入');
define('_AM_ADV_DBFACTORYUNPATCHED', '您的 databasefactory 尚未準備好進行 DBLayer Trapping 防 SQL 注入。需要一些修補。');
define('_AM_ADV_SUBTITLECHECK', '檢查 Protector 是否正常運作');
define('_AM_ADV_CHECKCONTAMI', '污染');
define('_AM_ADV_CHECKISOCOM', '孤立評論');

// XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', '並在其中加入以下一行：');

// XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', '前綴');
define('_AM_PROTECTOR_TABLES', '資料表');
define('_AM_PROTECTOR_UPDATED', '已更新');
define('_AM_PROTECTOR_COPY', '複製');
define('_AM_PROTECTOR_ACTIONS', '操作');

// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', '封鎖選中記錄的 IP：');
define('_AM_BUTTON_BAN_BY_IP', '封鎖 IP！');
define('_AM_JS_BANCONFIRM', '確定封鎖 IP？');
define('_AM_MSG_BANNEDIP', 'IP 已被封鎖');
define('_AM_ADMINSTATS_TITLE', 'Protector 日誌總結');

// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', '上個月');
define('_AM_ADMINSTATS_LAST_WEEK', '上週');
define('_AM_ADMINSTATS_LAST_DAY', '昨天');
define('_AM_ADMINSTATS_LAST_HOUR', '最後一小時');
