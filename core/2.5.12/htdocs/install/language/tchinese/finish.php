<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>您的網站</h3>
<p>您現在可以前往您的<a href='../index.php'>網站首頁</a>。</p>
<h3>技術支援</h3>
<p>請造訪 <a href='https://xoops.org/' rel='external'>XOOPS 專案</a></p>
<p><strong>注意：</strong> 您的網站目前僅包含最基本的功能。
請造訪 <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a>
以了解更多關於如何透過<em>模組</em>擴展 XOOPS 來呈現文字頁面、相片藝廊、論壇等等，
以及如何使用<em>佈景主題</em>自訂您的 XOOPS 外觀。</p>
";

$content .= "<h3>安全設定</h3>
<p>安裝程式將嘗試為您的網站配置安全設定。請仔細檢查以確保：
<div class='confirmMsg'>
<em>mainfile.php</em> 是唯讀的。<br>
從您的伺服器移除 <em>{$installer_modified}</em> 資料夾（如果安裝程式沒有自動重新命名，則移除 <em>install</em> 資料夾）。
</div>
</p>
";
