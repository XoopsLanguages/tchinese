<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 遷移');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', '掃描器結果');
define('_XOOPS_SMARTY4_SCANNER_RUN', '執行掃描');
define('_XOOPS_SMARTY4_SCANNER_END', '結束掃描器');
define('_XOOPS_SMARTY4_SCANNER_RULE', '規則');
define('_XOOPS_SMARTY4_SCANNER_MATCH', '符合');
define('_XOOPS_SMARTY4_SCANNER_FILE', '檔案');
define('_XOOPS_SMARTY4_SCANNER_FIXED', '已修復數量');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', '需要手動檢查');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', '不可寫入');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', '重新掃描選項');

define('_XOOPS_SMARTY4_FIX_BUTTON', '勾選下方的「是」核取方塊，然後點擊「執行掃描」按鈕，嘗試自動修復任何發現的問題。');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', '標記為完成');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', '模板目錄 (選填)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', '模板副檔名 (選填)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.5.12 引入了一項重大變更：Smarty 4</h3>

<p>不幸的是，此變更可能會影響一些較舊的佈景主題。因此，在繼續升級之前，請確保您遵循以下步驟：

<li>執行 preflight.php 以檢查任何過時的佈景主題或模組模板。</li>
<li>如果發現任何問題，請查閱此文件以了解在繼續升級之前所需的修改。</li>
<li>進行必要的變更後，再次執行 preflight.php。</li>
<li>如果沒有更多問題，您可以開始升級過程。</li>
</p>
EOT,
);
