<div id="help-template" class="outer">
    <h1 class="head">幫助： <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="返回 Protector 管理">Protector <img src="<{xoAdminIcons 'home.png'}>" alt="返回 Protector 管理"/></a></h1>
    <!-- -----幫助內容 ---------- -->
    <h4 class="odd">描述</h4>

    <p class="even">Protector 是一個模組，用於防禦您的 XOOPS CMS 免受各種惡意攻擊。</p>
    <h4 class="odd">安裝/卸載</h4>

    <p>首先，如果您還沒有這麼做，請在 mainfile.php 中定義 XOOPS_TRUST_PATH。</p>
    <br>

    <p>將壓縮包中的 html/modules/protector 複製到您的 XOOPS_ROOT_PATH/modules/ 目錄中。</p>

    <p>將壓縮包中的 xoops_trust_path/modules/protector 複製到您的 XOOPS_TRUST_PATH/modules/ 目錄中。</p>
    <br>

    <p>將 XOOPS_TRUST_PATH/modules/protector/configs 的權限設置為可寫</p>
    <h4 class="odd">= 如何恢復 =</h4>

    <p class="even">如果您被 Protector 禁用，只需刪除 XOOPS_TRUST_PATH/modules/protector/configs/ 目錄下的檔案即可。</p>
    <h4 class="odd">過濾器插件介紹</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        反垃圾郵件插件。
        <br>
        所有來自於 RBL 註冊 IP 的發文將被拒絕。
        <br>
        此插件可能會降低發文性能，特別是在聊天模組中。
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        反垃圾郵件插件。
        <br>
        所有來自於 http:BL 註冊 IP 的發文將被拒絕。
        <br>
        使用此插件前，請從 http://www.projecthoneypot.org/ 獲取 HTTPBL_KEY 並設置到過濾器文件中。
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        反垃圾郵件插件。
        <br>
        沒有多字節字符的發文將被拒絕。
        <br>
        此插件僅適用於日文、繁體中文、簡體中文和韓文網站。
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        所有來自訪客的發文將使用 HTMLPurifier 進行過濾。
        <br>
        如果您允許訪客發佈 HTML，強烈建議您啟用此功能。
    </p>

    <p class="even">- postcommon_register_insert_js_check.php
        <br>
        此插件防止機器人用戶註冊。
        <br>
        需要在訪客瀏覽器上運行 JavaScript。
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        設定一個訊息，給那些錯誤輸入密碼超過指定次數的訪客。
        <br>
        所有命名為 *_message.php 的插件都會指定拒絕訪問的訊息。
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        當帶寬限制啟用時，這個插件會將錯誤記錄到 Apache 的 error_log 中。
    </p>

    <p>所有命名為 *_errorlog.php 的插件都會將一些信息記錄到 Apache 的 error_log 中。</p>
    <h4 class="odd">教學</h4>

    <p class="even">教學即將推出。</p>
    <!-- -----幫助內容 ---------- -->
</div>
