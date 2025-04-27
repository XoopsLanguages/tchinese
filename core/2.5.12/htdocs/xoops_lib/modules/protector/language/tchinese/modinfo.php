<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // 模組名稱
    define($constpref . '_NAME', 'Protector');

    // 模組簡介
    define($constpref . '_DESC', '此模組保護您的 XOOPS 網站免受各種攻擊，如 DoS、SQL 注入和變數污染。');

    // 菜單
    define($constpref . '_ADMININDEX', 'Protector 中心');
    define($constpref . '_ADVISORY', '安全建議');
    define($constpref . '_PREFIXMANAGER', '前綴管理');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', '權限');

    // 設定
    define($constpref . '_GLOBAL_DISBL', '暫時禁用');
    define($constpref . '_GLOBAL_DISBLDSC', '所有保護功能暫時禁用。<br>解決問題後不要忘記關閉此設置');

    define($constpref . '_DEFAULT_LANG', '預設語言');
    define($constpref . '_DEFAULT_LANGDSC', '設定顯示訊息之前的語言');

    define($constpref . '_RELIABLE_IPS', '可信的 IP');
    define($constpref . '_RELIABLE_IPSDSC', '設置您信任的 IP，並使用 | 分隔。^ 匹配字串開頭，$ 匹配字串結尾。');

    define($constpref . '_LOG_LEVEL', '日誌級別');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', '禁止 IP 停留時間（秒）');

    define($constpref . '_LOGLEVEL0', '無');
    define($constpref . '_LOGLEVEL15', '靜音');
    define($constpref . '_LOGLEVEL63', '安靜');
    define($constpref . '_LOGLEVEL255', '完全');

    define($constpref . '_HIJACK_TOPBIT', '會話的保護 IP 位元');
    define($constpref . '_HIJACK_TOPBITDSC', '反會話劫持：<br>預設值 24/56（IPV4/IPV6 的子網掩碼）。<br>當您的 IP 不穩定時，通過位數設置 IP 範圍。<br>(例如) 如果您的 IP 可以在 192.168.0.0-192.168.0.255 範圍內變動，請設置 24（位元）。');
    define($constpref . '_HIJACK_DENYGP', '禁止在會話中移動 IP 的群組');
    define($constpref . '_HIJACK_DENYGPDSC', '反會話劫持：<br>選擇不允許在會話中變動其 IP 的群組。<br>（建議開啟管理員群組）。');
    define($constpref . '_SAN_NULLBYTE', '處理 null-byte');
    define($constpref . '_SAN_NULLBYTEDSC', '結束字符 "\\0" 經常用於惡意攻擊。<br>會將 null-byte 轉換為空格。<br>（強烈建議開啟）');
    define($constpref . '_DIE_NULLBYTE', '發現 null-byte 時退出');
    define($constpref . '_DIE_NULLBYTEDSC', '結束字符 "\\0" 經常用於惡意攻擊。<br>（強烈建議開啟）');
    define($constpref . '_DIE_BADEXT', '發現不良擴展名的檔案時退出');
    define($constpref . '_DIE_BADEXTDSC', '如果有人嘗試上傳擴展名為 .php 等不良檔案，該模組會退出您的 XOOPS。<br>如果您經常將 php 檔案附加到 B-Wiki 或 PukiWikiMod 中，請關閉此設置。');
    define($constpref . '_CONTAMI_ACTION', '發現污染時的處理方式');
    define($constpref . '_CONTAMI_ACTIONDS', '選擇當有人嘗試將系統全域變數污染您的 XOOPS 時的行動。<br>（建議選擇空白頁面）');
    define($constpref . '_ISOCOM_ACTION', '發現孤立的 comment-in 時的行動');
    define($constpref . '_ISOCOM_ACTIONDSC', '反 SQL 注入：<br>選擇當發現孤立的 "/*" 時的行動。<br>"Sanitizing" 意味著在結尾處加入另一個 "*/"。<br>（建議選擇 Sanitizing）');
    define($constpref . '_UNION_ACTION', '發現 UNION 時的行動');
    define($constpref . '_UNION_ACTIONDSC', '反 SQL 注入：<br>選擇當發現 UNION 等 SQL 語法時的行動。<br>"Sanitizing" 意味著將 "union" 改為 "uni-on"。<br>（建議選擇 Sanitizing）');
    define($constpref . '_ID_INTVAL', '強制將變數如 id 轉換為整數');
    define($constpref . '_ID_INTVALDSC', '所有名為 "*id" 的請求將被處理為整數。<br>此選項可防止某些類型的 XSS 和 SQL 注入。<br>雖然建議開啟此選項，但它可能會與某些模組產生問題。');
    define($constpref . '_FILE_DOTDOT', '防範目錄穿越攻擊');
    define($constpref . '_FILE_DOTDOTDSC', '它會從所有看似目錄穿越的請求中移除 ".."');

    define($constpref . '_BF_COUNT', '反暴力破解');
    define($constpref . '_BF_COUNTDSC', "設置來賓在 10 分鐘內允許的最大登錄嘗試次數。如果失敗的登錄次數超過此限制，來賓的 IP 會被禁用。");

    define($constpref . '_BWLIMIT_COUNT', '帶寬限制');
    define($constpref . '_BWLIMIT_COUNTDSC', '指定觀看期間內對 mainfile.php 的最大訪問次數。對於 CPU 帶寬足夠的正常環境，這個值應設為 0。小於 10 的數值將被忽略。');

    define($constpref . '_DOS_SKIPMODS', '跳過 DoS/Crawler 檢查的模組');
    define($constpref . '_DOS_SKIPMODSDSC', '設置以 | 分隔的模組目錄名。此選項對聊天模組等非常有用。');

    define($constpref . '_DOS_EXPIRE', '高負載檢查時間（秒）');
    define($constpref . '_DOS_EXPIREDSC', '此值指定高頻重載（F5 攻擊）和高負載爬蟲的檢查時間。');

    define($constpref . '_DOS_F5COUNT', 'F5 攻擊的壞次數');
    define($constpref . '_DOS_F5COUNTDSC', '防範 DoS 攻擊。<br>此值指定被視為惡意攻擊的重新加載次數。');
    define($constpref . '_DOS_F5ACTION', '對 F5 攻擊的處理方式');

    define($constpref . '_DOS_CRCOUNT', '爬蟲的壞次數');
    define($constpref . '_DOS_CRCOUNTDSC', '防範高負載爬蟲。<br>此值指定被視為不良爬蟲的訪問次數。');
    define($constpref . '_DOS_CRACTION', '對高負載爬蟲的處理方式');

    define($constpref . '_DOS_CRSAFE', '受歡迎的 User-Agent');
    define($constpref . '_DOS_CRSAFEDSC', 'User-Agent 的 perl 正則表達式模式。<br>如果匹配，則該爬蟲永遠不會被視為高負載爬蟲。<br>例如）/(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', '無（僅日誌記錄）');
    define($constpref . '_OPT_SAN', '清理');
    define($constpref . '_OPT_EXIT', '空白頁面');
    define($constpref . '_OPT_BIP', '禁止 IP（無限制）');
    define($constpref . '_OPT_BIPTIME0', '禁止 IP（暫停）');

    define($constpref . '_DOSOPT_NONE', '無（僅日誌記錄）');
    define($constpref . '_DOSOPT_SLEEP', '休眠');
    define($constpref . '_DOSOPT_EXIT', '空白頁面');
    define($constpref . '_DOSOPT_BIP', '禁止 IP（無限制）');
    define($constpref . '_DOSOPT_BIPTIME0', '禁止 IP（暫停）');
    define($constpref . '_DOSOPT_HTA', '通過 .htaccess 拒絕（實驗性）');

    define($constpref . '_BIP_EXCEPT', '永遠不會被標註為壞 IP 的群組');
    define($constpref . '_BIP_EXCEPTDSC', '屬於此處指定群組的用戶將永遠不會被禁用。<br>（建議開啟管理員群組）。');

    define($constpref . '_DISABLES', '禁用 XOOPS 中的危險功能');

    define($constpref . '_DBLAYERTRAP', '啟用資料庫層捕獲反 SQL 注入');
    define($constpref . '_DBLAYERTRAPDSC', '幾乎所有 SQL 注入攻擊將被此功能取消。此功能需要資料庫工廠的支持。您可以在安全建議頁面檢查它。此設置必須開啟。請勿隨意關閉。');
    define($constpref . '_DBTRAPWOSRV', '永遠不檢查 _SERVER 以防 SQL 注入');
    define($constpref . '_DBTRAPWOSRVDSC', '某些伺服器始終啟用資料庫層捕獲。這會導致錯誤檢測為 SQL 注入攻擊。如果您遇到這種錯誤，請開啟此選項。您應該知道此選項會降低資料庫層反 SQL 注入的安全性。');

    define($constpref . '_BIGUMBRELLA', '啟用反 XSS（BigUmbrella）');
    define($constpref . '_BIGUMBRELLADSC', '這可以保護您免受幾乎所有 XSS 漏洞攻擊。但它不是 100% 有效的');

    define($constpref . '_SPAMURI4U', '反垃圾郵件：對普通用戶的 URL');
    define($constpref . '_SPAMURI4UDSC', '如果來自非管理員用戶的 POST 數據中發現此數量的 URL，則該 POST 將被視為垃圾郵件。0 表示禁用此功能。');
    define($constpref . '_SPAMURI4G', '反垃圾郵件：對來賓的 URL');
    define($constpref . '_SPAMURI4GDSC', '如果來自來賓的 POST 數據中發現此數量的 URL，則該 POST 將被視為垃圾郵件。0 表示禁用此功能。');

    // 3.40b
    define($constpref . '_ADMINHOME', '首頁');
    define($constpref . '_ADMINABOUT', '關於');
    // 3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', '停止論壇垃圾郵件');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', '檢查 POST 數據，是否與 www.stopforumspam.com 資料庫中的垃圾郵件發送者匹配。需要 PHP CURL 函式庫。');
    // 3.60
    define($constpref . '_ADMINSTATS', '概覽');
    define($constpref . '_BANIP_TIME0DSC', '自動禁用 IP 的懲罰時間（秒）');
}
