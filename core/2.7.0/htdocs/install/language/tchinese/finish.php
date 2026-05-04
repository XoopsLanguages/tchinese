<?php
//
// _LANGCODE: zh_TW
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>您的網站</h3>
<p>您現在可以訪問 <a href='../index.php'>您網站的主頁</a>.</p>
<h3>支援</h3>
<p>訪問 <a href='https://xoops.org/' rel='external'>XOOPS 項目</a></p>
<p><strong>注意力 ：</strong> 您的網站目前包含最低限度的功能。 
請訪問 <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
了解有關擴展 XOOPS 以呈現文字頁面、照片庫、論壇等的更多信息，
與 <em>模組</em> 以及自訂 XOOPS 的外觀 <em>主題</em>.</p>
";

$content .= "<h3>安全性設定</h3>
<p>出於安全考慮，安裝程式將嘗試設定您的網站。請仔細檢查以確保：
<div class='confirmMsg'>
這 <em>mainfile.php</em> 是唯讀的。<br>
刪除資料夾 <em>{$installer_modified}</em> （或者 <em>install</em> 如果安裝程式沒有自動重新命名）從您的伺服器。
</div>
</p>
";
