<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS 升級器</h2>

<p>
<em>升級</em> 將檢查此 XOOPS 安裝並應用任何必要的補丁，以使其與新的 XOOPS 代碼兼容。補丁可能包括數據庫更改、為新配置項目添加默認設置、文件和數據更新等。
<p>
每次補丁後，升級器將報告狀態並等待您的輸入以繼續。升級結束後，控制權將轉交給系統模組更新功能。

<div class="alert alert-warning">
升級完成後，別忘了：
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> 刪除升級文件夾</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> 更新任何已更改的模組</li>
</ul>
</div>

EOT,
);
