<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// 導覽
define('_AM_SYSTEM_BLOCKS_ADMIN', '區塊管理');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', '管理');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', '新增區塊');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', '編輯區塊');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', '複製區塊');
// 表單
define('_AM_SYSTEM_BLOCKS_CUSTOM', '自訂區塊');
define('_AM_SYSTEM_BLOCKS_TYPES', '所有類型');
define('_AM_SYSTEM_BLOCKS_GENERATOR', '模組');
define('_AM_SYSTEM_BLOCKS_GROUP', '群組');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', '頁面');
define('_AM_SYSTEM_BLOCKS_DISPLAY', '顯示區塊 ');
define('_AM_SYSTEM_BLOCKS_HIDE', '隱藏區塊 ');
define('_AM_SYSTEM_BLOCKS_CLONE', '複製');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', '左側');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', '頂部左側');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', '頂部中間');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', '頂部右側');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', '右側');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', '底部左側');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', '底部中間');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', '底部右側');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', '頁尾左側');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', '頁尾中間');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', '頁尾右側');

define('_AM_SYSTEM_BLOCKS_ADD', '新增區塊');
define('_AM_SYSTEM_BLOCKS_MANAGE', '管理區塊');
define('_AM_SYSTEM_BLOCKS_NAME', '名稱');
define('_AM_SYSTEM_BLOCKS_TYPE', '區塊類型');
define('_AM_SYSTEM_BLOCKS_SBLEFT', '側邊區塊 - 左側');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', '側邊區塊 - 右側');
define('_AM_SYSTEM_BLOCKS_CBLEFT', '中間區塊 - 左側');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', '中間區塊 - 右側');
define('_AM_SYSTEM_BLOCKS_CBCENTER', '中間區塊 - 中間');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', '中間區塊 - 底部左側');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', '中間區塊 - 底部右側');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', '頁尾區塊 - 左側');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', '頁尾區塊 - 中間');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', '頁尾區塊 - 右側');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', '中間區塊 - 底部');
define('_AM_SYSTEM_BLOCKS_WEIGHT', '權重');
define('_AM_SYSTEM_BLOCKS_VISIBLE', '可見');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', '顯示於');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', '首頁');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', '所有頁面');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', '未指派');
define('_AM_SYSTEM_BLOCKS_TITLE', '標題');
define('_AM_SYSTEM_BLOCKS_CONTENT', '內容');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', '實用標籤：');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s 將輸出 %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', '內容類型');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'PHP 腳本');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', '自動格式化（啟用表情符號）');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', '自動格式化（停用表情符號）');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', '快取存活時間');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', '自訂區塊（HTML）');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', '自訂區塊（PHP）');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', '自訂區塊（自動格式化 + 表情符號）');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', '自訂區塊（自動格式化）');
define('_AM_SYSTEM_BLOCKS_EDITTPL', '編輯模板');
define('_AM_SYSTEM_BLOCKS_OPTIONS', '選項');
define('_AM_SYSTEM_BLOCKS_DRAG', '拖曳或排序區塊');
// 訊息
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', '您確定要刪除此區塊？<div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', '系統區塊無法被刪除！');
define('_AM_SYSTEM_BLOCKS_MODULECANT', '此區塊無法直接刪除！若您想停用此區塊，請停用該模組。');
// 提示
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>您可以通過拖曳的方式輕鬆更改側邊或排序位置，點擊 <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> 此圖片，依您的喜好設定您的網站</li>
<li>新增一個自訂區塊</li>
<li>通過點擊 <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> 或 <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /> 來設定區塊為線上或離線</li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', '頁尾左側');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', '頁尾中間');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', '頁尾右側');
