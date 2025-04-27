<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// 導航
define('_AM_SYSTEM_USERS_NAV_MAIN', '用戶管理');
define('_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH', '進階搜尋');
define('_AM_SYSTEM_USERS_NAV_ADD_USER', '新增用戶');
define('_AM_SYSTEM_USERS_NAV_EDIT_USER', '編輯用戶');
define('_AM_SYSTEM_USERS_NAV_DELETE_USER', '刪除用戶');
// 提示
define('_AM_SYSTEM_USERS_NAV_TIPS', '
<ul>
<li>管理 XOOPS 用戶</li>
</ul>');
// 主要
define('_AM_SYSTEM_USERS_USER', '用戶');
define('_AM_SYSTEM_USERS_ADMIN', '管理員');
define('_AM_SYSTEM_USERS_UID', '用戶 ID');
define('_AM_SYSTEM_USERS_STATUS', '狀態');
define('_AM_SYSTEM_USERS_NAME', '名稱');
define('_AM_SYSTEM_USERS_UNAME', '用戶名稱');
define('_AM_SYSTEM_USERS_EMAIL', '電子郵件');
define('_AM_SYSTEM_USERS_EDIT_GROUPS', '編輯群組');
define('_AM_SYSTEM_USERS_REG_DATE', '註冊日期');
define('_AM_SYSTEM_USERS_LAST_LOGIN', '最後登入');
define('_AM_SYSTEM_USERS_POSTS', '評論/發文');
define('_AM_SYSTEM_USERS_LEVEL', '等級');
define('_AM_SYSTEM_USERS_ACTION', '操作');
define('_AM_SYSTEM_USERS_FINDUS', '搜尋用戶');
define('_AM_SYSTEM_USERS_AVATAR', '頭像');
define('_AM_SYSTEM_USERS_REALNAME', '真實名稱');
define('_AM_SYSTEM_USERS_REGDATE', '註冊日期');
define('_AM_SYSTEM_USERS_PM', '私訊');
define('_AM_SYSTEM_USERS_URL', '網站 URL');
define('_AM_SYSTEM_USERS_PREVIOUS', '上一頁');
define('_AM_SYSTEM_USERS_NEXT', '下一頁');
define('_AM_SYSTEM_USERS_USERSFOUND', '%s 位用戶找到');
define('_AM_SYSTEM_USERS_ACTUS', '啟用用戶：%s');
define('_AM_SYSTEM_USERS_INACTUS', '停用用戶：%s');
define('_AM_SYSTEM_USERS_NOFOUND', '未找到用戶');
define('_AM_SYSTEM_USERS_ICQ', 'ICQ 號碼');
define('_AM_SYSTEM_USERS_AIM', 'AIM 連結');
define('_AM_SYSTEM_USERS_YIM', 'YIM 連結');
define('_AM_SYSTEM_USERS_FACEBOOK', 'Facebook 連結'); //TODO
define('_AM_SYSTEM_USERS_SKYPE', 'Skype 連結'); //TODO
define('_AM_SYSTEM_USERS_MSNM', 'MSNM 連結');
define('_AM_SYSTEM_USERS_TIMEZONE', '時區');
define('_AM_SYSTEM_USERS_SHOWSIG', '總是附加我的簽名');
define('_AM_SYSTEM_USERS_CDISPLAYMODE', '評論顯示模式');
define('_AM_SYSTEM_USERS_CSORTORDER', '評論排序方式');
define('_AM_SYSTEM_USERS_EXTRAINFO', '額外資訊');
define('_AM_SYSTEM_USERS_LOCATION', '地點');
define('_AM_SYSTEM_USERS_OCCUPATION', '職位');
define('_AM_SYSTEM_USERS_INTEREST', '興趣');
define('_AM_SYSTEM_USERS_URLC', 'URL 包含');
define('_AM_SYSTEM_USERS_LOCATIONC', '地點包含');
define('_AM_SYSTEM_USERS_OCCUPATIONC', '職位包含');
define('_AM_SYSTEM_USERS_INTERESTC', '興趣包含');
define('_AM_SYSTEM_USERS_LASTLOGMORE', "最後登入超過 <span style='color:#ff0000;'>X</span> 天");
define('_AM_SYSTEM_USERS_LASTLOGLESS', "最後登入少於 <span style='color:#ff0000;'>X</span> 天");
define('_AM_SYSTEM_USERS_REGMORE', "註冊日期超過 <span style='color:#ff0000;'>X</span> 天");
define('_AM_SYSTEM_USERS_REGLESS', "註冊日期少於 <span style='color:#ff0000;'>X</span> 天");
define('_AM_SYSTEM_USERS_POSTSMORE', "發文數量大於 <span style='color:#ff0000;'>X</span>");
define('_AM_SYSTEM_USERS_POSTSLESS', "發文數量少於 <span style='color:#ff0000;'>X</span>");
define('_AM_SYSTEM_USERS_SORT', '排序方式');
define('_AM_SYSTEM_USERS_ORDER', '順序');
define('_AM_SYSTEM_USERS_LASTLOGIN', '最後登入');
define('_AM_SYSTEM_USERS_ASC', '升序');
define('_AM_SYSTEM_USERS_DESC', '降序');
define('_AM_SYSTEM_USERS_LIMIT', '每頁顯示用戶數量');
define('_AM_SYSTEM_USERS_RESULTS', '搜尋結果');
define('_AM_SYSTEM_USERS_SHOWMAILOK', '顯示的用戶類型');
define('_AM_SYSTEM_USERS_MAILOK', '僅顯示接受電子郵件的用戶');
define('_AM_SYSTEM_USERS_MAILNG', "僅顯示不接受電子郵件的用戶");
define('_AM_SYSTEM_USERS_SHOWTYPE', '顯示的用戶類型');
define('_AM_SYSTEM_USERS_ACTIVE', '僅顯示啟用用戶');
define('_AM_SYSTEM_USERS_INACTIVE', '僅顯示停用用戶');
define('_AM_SYSTEM_USERS_BOTH', '所有用戶');
define('_AM_SYSTEM_USERS_SENDMAIL', '發送電子郵件');
define('_AM_SYSTEM_USERS_ADD2GROUP', '將用戶新增到 %s 群組');
define('_AM_SYSTEM_USERS_GROUPS', '群組');
define('_AM_SYSTEM_USERS_ADD_GROUPS', '新增群組');
define('_AM_SYSTEM_USERS_DELETE_GROUPS', '刪除群組');
define('_AM_SYSTEM_USERS_AYSYWTDU', '您確定要刪除用戶 %s 嗎？');
define('_AM_SYSTEM_USERS_BYTHIS', '這樣做將永久刪除此用戶的所有資料。');
define('_AM_SYSTEM_USERS_YES', '是');
define('_AM_SYSTEM_USERS_NO', '否');
define('_AM_SYSTEM_USERS_YMCACF', '您必須完成所有必填欄位');
define('_AM_SYSTEM_USERS_CNRNU', '無法註冊新用戶。');
define('_AM_SYSTEM_USERS_EDEUSER', '編輯/刪除用戶');
define('_AM_SYSTEM_USERS_NICKNAME', '用戶名稱');
define('_AM_SYSTEM_USERS_ADDUSER', '新增用戶');
define('_AM_SYSTEM_USERS_OPTION', '選項');
define('_AM_SYSTEM_USERS_THEME', '主題');
define('_AM_SYSTEM_USERS_AOUTVTEAD', '允許其他用戶查看此電子郵件地址');
define('_AM_SYSTEM_USERS_RANK', '等級');
define('_AM_SYSTEM_USERS_NSRA', '無特殊等級分配');
define('_AM_SYSTEM_USERS_NSRID', '資料庫中無特殊等級');
define('_AM_SYSTEM_USERS_ACCESSLEV', '訪問等級');
define('_AM_SYSTEM_USERS_SIGNATURE', '簽名');
define('_AM_SYSTEM_USERS_PASSWORD', '密碼');
define('_AM_SYSTEM_USERS_INDICATECOF', '* 表示必填欄位');
define('_AM_SYSTEM_USERS_NOTACTIVE', '此用戶尚未啟用。您是否希望啟用此用戶？');
define('_AM_SYSTEM_USERS_UPDATEUSER', '更新用戶');
define('_AM_SYSTEM_USERS_USERINFO', '用戶資訊');
define('_AM_SYSTEM_USERS_USERID', '用戶 ID');
define('_AM_SYSTEM_USERS_RETYPEPD', '重新輸入密碼');
define('_AM_SYSTEM_USERS_CHANGEONLY', '(僅限變更)');
define('_AM_SYSTEM_USERS_SYNCHRONIZE', '同步');
define('_AM_SYSTEM_USERS_USERDONEXIT', "用戶不存在！");
define('_AM_SYSTEM_USERS_STNPDNM', '抱歉，新密碼不匹配。請返回並重試');
define('_AM_SYSTEM_USERS_CNUUSER', '無法更新用戶');
define('_AM_SYSTEM_USERS_CNGUSERID', '無法獲取用戶 ID');
define('_AM_SYSTEM_USERS_NOUSERS', '未選擇任何用戶');
define('_AM_SYSTEM_USERS_CNRNU2', '無法將新用戶添加到群組：%s。');
define('_AM_SYSTEM_USERS_SEARCH', '搜尋');
define('_AM_SYSTEM_USERS_SEARCH_USER', '搜尋用戶：');
define('_AM_SYSTEM_USERS_ADVANCED_SEARCH', '進階搜尋');
define('_AM_SYSTEM_USERS_EDIT', '編輯會員');
define('_AM_SYSTEM_USERS_DEL', '刪除會員');
define('_AM_SYSTEM_USERS_DELETE', '刪除');
define('_AM_SYSTEM_USERS_SUBMIT', '提交');
define('_AM_SYSTEM_USERS_PURGE', '清除');
define('_AM_SYSTEM_USERS_ADD', '新增會員');
define('_AM_SYSTEM_USERS_VIEW', '查看會員資訊');
define('_AM_SYSTEM_USERS_NO_FOUND', '未找到用戶');
define('_AM_SYSTEM_USERS_NOT_CONNECT', '從未連接過');
define('_AM_SYSTEM_USERS_FORM_SURE_DEL', '確定刪除用戶：%s');
define('_AM_SYSTEM_USERS_FORM_SURE_DEL2', '刪除');
define('_AM_SYSTEM_USERS_NO_SUPP', '用戶無法刪除：%s <br>');
define('_AM_SYSTEM_USERS_NO_ADMINSUPP', '無法刪除管理員用戶：%s <br>');
define('_AM_SYSTEM_USERS_ERROR', '錯誤：<br><br> %s');
define('_AM_SYSTEM_USERS_ALLGROUP', '所有群組');
define('_AM_SYSTEM_USERS_ALLUSER', '所有用戶');
define('_AM_SYSTEM_USERS_ACTIVEUSER', '僅顯示啟用用戶');
define('_AM_SYSTEM_USERS_INACTIVEUSER', '僅顯示停用用戶');
// 錯誤
define('_AM_SYSTEM_USERS_PSEUDO_ERROR', '用戶名稱 %s 已存在');
define('_AM_SYSTEM_USERS_MAIL_ERROR', '用戶電子郵件 %s 已存在');
// 2.5.4
define('_AM_SYSTEM_USERS_ACCEPT_EMAIL', '接受來自管理員的電子郵件');
