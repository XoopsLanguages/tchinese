<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', '顯示/隱藏說明文字');
// License
//define('LICENSE_NOT_WRITEABLE', '授權檔案 "%s" 無法寫入！');
//define('LICENSE_IS_WRITEABLE', '%s 授權檔案可寫入。');
// Configuration check page
define('SERVER_API', '伺服器 API');
define('PHP_EXTENSION', '%s 擴充套件');
define('CHAR_ENCODING', '字元編碼');
define('XML_PARSING', 'XML 解析');
define('REQUIREMENTS', '需求');
define('_PHP_VERSION', 'PHP 版本');
define('RECOMMENDED_SETTINGS', '建議設定');
define('RECOMMENDED_EXTENSIONS', '建議擴充套件');
define('SETTING_NAME', '設定名稱');
define('RECOMMENDED', '建議');
define('CURRENT', '目前');
define('RECOMMENDED_EXTENSIONS_MSG', '這些擴充套件在正常使用時並非必需，但可能需要用來探索某些特定功能（例如多語言或 RSS 支援）。因此，建議安裝這些擴充套件。');
define('NONE', '無');
define('SUCCESS', '成功');
define('WARNING', '警告');
define('FAILED', '失敗');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS 安裝精靈');
define('LANGUAGE_SELECTION', '語言選擇');
define('LANGUAGE_SELECTION_TITLE', '選擇您的語言');        // L128
define('INTRODUCTION', '介紹');
define('INTRODUCTION_TITLE', '歡迎使用 XOOPS 安裝精靈');        // L0
define('CONFIGURATION_CHECK', '配置檢查');
define('CONFIGURATION_CHECK_TITLE', '檢查您的伺服器配置');
define('PATHS_SETTINGS', '路徑設定');
define('PATHS_SETTINGS_TITLE', '路徑設定');
define('DATABASE_CONNECTION', '資料庫連線');
define('DATABASE_CONNECTION_TITLE', '資料庫連線');
define('DATABASE_CONFIG', '資料庫配置');
define('DATABASE_CONFIG_TITLE', '資料庫配置');
define('CONFIG_SAVE', '儲存配置');
define('CONFIG_SAVE_TITLE', '儲存您的系統配置');
define('TABLES_CREATION', '表格創建');
define('TABLES_CREATION_TITLE', '資料庫表格創建');
define('INITIAL_SETTINGS', '初始設定');
define('INITIAL_SETTINGS_TITLE', '請輸入您的初始設定');
define('DATA_INSERTION', '資料插入');
define('DATA_INSERTION_TITLE', '將您的設定儲存到資料庫');
define('WELCOME', '歡迎');
define('WELCOME_TITLE', '歡迎使用您的 XOOPS 網站');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS 實體路徑');
define('XOOPS_URLS', '網址位置');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS 文件根目錄實體路徑');
define('XOOPS_ROOT_PATH_HELP', 'XOOPS 文件（服務）目錄的實體路徑，不含結尾斜線');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS 程式庫目錄');
define('XOOPS_LIB_PATH_HELP', 'XOOPS 程式庫目錄的實體路徑，不含結尾斜線，為前向相容性考慮。將該資料夾置於 ' . XOOPS_ROOT_PATH_LABEL . ' 之外以確保安全。');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS 資料檔案目錄');
define('XOOPS_DATA_PATH_HELP', 'XOOPS 資料檔案（可寫入）目錄的實體路徑，不含結尾斜線，為前向相容性考慮。將該資料夾置於 ' . XOOPS_ROOT_PATH_LABEL . ' 之外以確保安全。');
define('XOOPS_URL_LABEL', '網站位置 (URL)'); // L56
define('XOOPS_URL_HELP', '用於存取您的 XOOPS 安裝的主要 URL'); // L58
define('LEGEND_CONNECTION', '伺服器連線');
define('LEGEND_DATABASE', '資料庫'); // L51
define('DB_HOST_LABEL', '伺服器主機名稱');    // L27
define('DB_HOST_HELP', '資料庫伺服器的主機名稱。如果不確定，<em>localhost</em> 在大多數情況下適用'); // L67
define('DB_USER_LABEL', '使用者名稱');    // L28
define('DB_USER_HELP', '用於連線到資料庫伺服器的使用者帳戶名稱'); // L65
define('DB_PASS_LABEL', '密碼');    // L52
define('DB_PASS_HELP', '您的資料庫使用者帳戶密碼'); // L68
define('DB_NAME_LABEL', '資料庫名稱');    // L29
define('DB_NAME_HELP', '主機上的資料庫名稱。如果不存在，安裝程式將嘗試創建資料庫'); // L64
define('DB_CHARSET_LABEL', '資料庫字元集');
define('DB_CHARSET_HELP', 'MySQL 支援字元集，允許您使用多種字元集儲存資料，並根據多種排序規則進行比較。');
define('DB_COLLATION_LABEL', '資料庫排序規則');
define('DB_COLLATION_HELP', '排序規則是一組用於比較字元集中的字元的規則。');
define('DB_PREFIX_LABEL', '表格前綴');    // L30
define('DB_PREFIX_HELP', '此前綴將添加到所有新創建的表格，以避免資料庫中的名稱衝突。如果不確定，請保留預設值'); // L63
define('DB_PCONNECT_LABEL', '使用持續連線');    // L54
define('DB_PCONNECT_HELP', "預設為 '否'。如果不確定，請留空"); // L69
define('DB_DATABASE_LABEL', '資料庫');
define('LEGEND_ADMIN_ACCOUNT', '管理員帳戶');
define('ADMIN_LOGIN_LABEL', '管理員登入'); // L37
define('ADMIN_EMAIL_LABEL', '管理員電子郵件'); // L38
define('ADMIN_PASS_LABEL', '管理員密碼'); // L39
define('ADMIN_CONFIRMPASS_LABEL', '確認密碼'); // L74
// Buttons
define('BUTTON_PREVIOUS', '上一步'); // L42
define('BUTTON_NEXT', '繼續'); // L47
// Messages
define('XOOPS_FOUND', '找到 %s');
define('CHECKING_PERMISSIONS', '正在檢查檔案和目錄權限...'); // L82
define('IS_NOT_WRITABLE', '%s 無法寫入。'); // L83
define('IS_WRITABLE', '%s 可寫入。'); // L84
define('XOOPS_PATH_FOUND', '路徑已找到。');
//define('READY_CREATE_TABLES', '未檢測到 XOOPS 表格。<br>安裝程式現已準備好創建 XOOPS 系統表格。');
define('XOOPS_TABLES_FOUND', '您的資料庫中已存在 XOOPS 系統表格。'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS 系統表格已創建。');
//define('READY_INSERT_DATA', '安裝程式現已準備好將初始資料插入您的資料庫。');
//define('READY_SAVE_MAINFILE', '安裝程式現已準備好將指定設定儲存到 <em>mainfile.php</em>。');
define('SAVED_MAINFILE', '設定已儲存');
define('SAVED_MAINFILE_MSG', '安裝程式已將指定設定儲存到 <em>mainfile.php</em> 和 <em>secure.php</em>。');
define('DATA_ALREADY_INSERTED', '資料庫中已找到 XOOPS 資料。');
define('DATA_INSERTED', '初始資料已插入資料庫。');
// %s is database name
define('DATABASE_CREATED', '資料庫 %s 已創建！'); // L43
// %s is table name
define('TABLE_NOT_CREATED', '無法創建表格 %s'); // L118
define('TABLE_CREATED', '表格 %s 已創建。'); // L45
define('ROWS_INSERTED', '%d 條記錄已插入表格 %s。'); // L119
define('ROWS_FAILED', '無法插入 %d 條記錄到表格 %s。'); // L120
define('TABLE_ALTERED', '表格 %s 已更新。'); // L133
define('TABLE_NOT_ALTERED', '無法更新表格 %s。'); // L134
define('TABLE_DROPPED', '表格 %s 已刪除。'); // L163
define('TABLE_NOT_DROPPED', '無法刪除表格 %s。'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', '無法存取指定的資料夾。請確認其是否存在且伺服器可讀取。');
define('ERR_NO_XOOPS_FOUND', '在指定的資料夾中找不到 XOOPS 安裝。');
define('ERR_INVALID_EMAIL', '無效的電子郵件'); // L73
define('ERR_REQUIRED', '需要填寫資訊。'); // L41
define('ERR_PASSWORD_MATCH', '兩次輸入的密碼不匹配');
define('ERR_NEED_WRITE_ACCESS', '伺服器必須被授予以下檔案和資料夾的寫入權限<br>（例如在 UNIX/LINUX 伺服器上使用 <em>chmod 775 目錄名稱</em>）<br>如果它們不可用或未正確創建，請手動創建並設定適當的權限。');
define('ERR_NO_DATABASE', '無法創建資料庫。請聯繫伺服器管理員以獲取詳情。'); // L31
define('ERR_NO_DBCONNECTION', '無法連線到資料庫伺服器。'); // L106
define('ERR_WRITING_CONSTANT', '無法寫入常數 %s。'); // L122
define('ERR_COPY_MAINFILE', '無法將分發檔案複製到 %s');
define('ERR_WRITE_MAINFILE', '無法寫入 %s。請檢查檔案權限並重試。');
define('ERR_READ_MAINFILE', '無法開啟 %s 進行讀取');
define('ERR_INVALID_DBCHARSET', "字元集 '%s' 不受支援。");
define('ERR_INVALID_DBCOLLATION', "排序規則 '%s' 不受支援。");
define('ERR_CHARSET_NOT_SET', 'XOOPS 資料庫未設定預設字元集。');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', '支援');
define('LOGIN', '驗證');
define('LOGIN_TITLE', '驗證');
define('USER_LOGIN', '管理員登入');
define('USERNAME', '使用者名稱：');
define('PASSWORD', '密碼：');
define('ICONV_CONVERSION', '字元集轉換');
define('ZLIB_COMPRESSION', 'Zlib 壓縮');
define('IMAGE_FUNCTIONS', '圖片功能');
define('IMAGE_METAS', '圖片元資料 (exif)');
define('FILTER_FUNCTIONS', '過濾功能');
define('ADMIN_EXIST', '管理員帳戶已存在。');
define('CONFIG_SITE', '網站配置');
define('CONFIG_SITE_TITLE', '網站配置');
define('MODULES', '模組安裝');
define('MODULES_TITLE', '模組安裝');
define('THEME', '選擇主題');
define('THEME_TITLE', '選擇預設主題');
define('INSTALLED_MODULES', '以下模組已安裝。');
define('NO_MODULES_FOUND', '未找到模組。');
define('NO_INSTALLED_MODULES', '未安裝任何模組。');
define('THEME_NO_SCREENSHOT', '未找到螢幕截圖');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', '密碼強度');
define('PASSWORD_DESC', '未輸入密碼');
define('PASSWORD_GENERATOR', '密碼產生器');
define('PASSWORD_GENERATE', '產生');
define('PASSWORD_COPY', '複製');
define('PASSWORD_VERY_WEAK', '非常弱');
define('PASSWORD_WEAK', '弱');
define('PASSWORD_BETTER', '較好');
define('PASSWORD_MEDIUM', '中等');
define('PASSWORD_STRONG', '強');
define('PASSWORD_STRONGEST', '最強');
//2.5.7
define('WRITTEN_LICENSE', '已寫入 XOOPS %s 授權金鑰：<strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', '重試');
define('CHMOD_CHGRP_IGNORE', '仍然使用');
define('CHMOD_CHGRP_ERROR', '安裝程式可能無法寫入設定檔案 %1$s。<p>PHP 以使用者 %2$s 和群組 %3$s 寫入檔案。<p>目錄 %4$s/ 具有使用者 %5$s 和群組 %6$s');
//2.5.9
define("CURL_HTTP", "客戶端 URL 程式庫 (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', '網站的 Cookie 域名');
define('XOOPS_COOKIE_DOMAIN_HELP', '用於設定 Cookie 的域名。可以留空，使用 URL 的完整主機名稱（例如 www.example.com），或不含子域名的註冊域名（例如 example.com），以便在子域名間共享（例如 www.example.com 和 blog.example.com）。');
define('INTL_SUPPORT', '國際化功能');
define('XOOPS_SOURCE_CODE', "XOOPS 在 GitHub 上");
define('XOOPS_INSTALLING', '正在安裝');
define('XOOPS_ERROR_ENCOUNTERED', '錯誤');
define('XOOPS_ERROR_SEE_BELOW', '請查看下方訊息。');
define('MODULES_AVAILABLE', '可用模組');
define('INSTALL_THIS_MODULE', '新增 %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', '無法複製設定檔案 %s');
