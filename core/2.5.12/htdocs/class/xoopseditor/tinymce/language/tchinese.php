<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * 與 editor_registry.php 相關
 */
// 編輯器名稱
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// 該值必須與 /tinymce/jscripts/langs/your_language_code 相同，例如，"en" 代表英文，"fr" 代表法文
// 詳細資料請參閱 http://tinymce.moxiecode.com/download_i18n.php
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'zh-tw');
// 字型列表，格式為 "名稱=值1,值2;名稱=值"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', '無法獲取圖像 %s');
