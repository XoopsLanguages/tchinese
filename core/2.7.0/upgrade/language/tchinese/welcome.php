<?php

// _LANGCODE: zh_TW
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS 升級器</h2>

<p>
<em>升級</em> 將檢查此 XOOPS 安裝並套用任何所需的補丁以使其相容
使用新的 XOOPS 代碼。補丁可能包括資料庫更改，添加新的預設設置
設定項、檔案和資料更新等等。
<p>
每次打补丁后，升级程序都会报告状态，并等待您的输入继续。在
升级结束后，控制权将传递给系统模块更新功能。

<div class="alert alert-warning">
升級完成後，不要忘記：
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> 刪除升級資料夾</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> 更新所有已更改的模組</li>
</div>

EOT,
);
