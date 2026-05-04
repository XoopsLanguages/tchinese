<?php
//
// _LANGCODE: zh_TW
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> 是一個開源的
    以 PHP 編寫的物件導向的 Web 發布系統。它是一個理想的工具
    開發從小到大的動態社群網站、公司內部入口網站、企業入口網站、部落格等等。
</p>
<p>
    XOOPS 依照以下條款發布：
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU 通用公共授權 (GPL)</a>
    版本 2 或更高版本，並且可以免費使用和修改。
    只要您遵守 GPL 的分發條款，就可以免費重新分發。
</p>
<h3>要求</h3>
<ul>
    <li>WWW 伺服器（<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>、IIS 等）</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 或更高，建議 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 或更高，建議 8.4.5+ </li>
</ul>
<h3>安裝前準備</h3>
<ol>
    <li>正確設定 WWW 伺服器、PHP 和資料庫伺服器。</li>
    <li>為您的 XOOPS 網站準備一個資料庫。</li>
    <li>準備使用者帳戶並授予使用者存取資料庫的權限。</li>
    <li>使這些目錄和檔案可寫入：%s</li>
    <li>基於安全考量，強烈建議您將以下兩個目錄移出 <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">文件根目錄</a>，並變更資料夾名稱：%s</li>
    <li>建立這些目錄（如果尚未存在），並使其可寫入：%s</li>
    <li>開啟瀏覽器的 cookie 和 JavaScript。</li>
</ol>
<h3>特別說明</h3>
<ol>
    <li>某些特定的系統軟體組合可能需要一些額外的配置才能運作
    與 XOOPS。如果這些主題中的任何一個適用於您的環境，請參閱完整的
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    安裝手冊</a> 了解更多。<br><br>

    <li><strong>SELinux</strong> 啟用的系統（例如 <strong>CentOS</strong>  和 <strong>RHEL</strong>）可能需要更改安全上下文
    對於 XOOPS 目錄，除了使目錄可寫入的正常檔案權限之外。
    請諮詢您的系統文件和/或系統管理員。
</ol>
';


return $content;
