<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> 是一個開源的
    物件導向網頁發布系統，使用 PHP 編寫。它是開發小型到大型動態社群網站、企業內部門戶、企業門戶、網誌等的理想工具。
</p>
<p>
    XOOPS 採用
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU 通用公共許可證 (GPL)</a>
    版本 2 或更高版本發佈，並且可以自由使用和修改。
    只要遵守 GPL 的分發條款，就可以自由再分發。
</p>
<h3>需求</h3>
<ul>
    <li>WWW 伺服器 (<a href="https://www.apache.org/" rel="external">Apache</a>、<a href="https://www.nginx.com/" rel="external">NGINX</a>、IIS 等)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 5.6.0 或更高版本，推薦使用 7.3+ 版本</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 或更高版本，推薦使用 5.7+ 版本</li>
</ul>
<h3>安裝前準備</h3>
<ol>
    <li>正確設定 WWW 伺服器、PHP 和資料庫伺服器。</li>
    <li>為你的 XOOPS 網站準備一個資料庫。</li>
    <li>準備用戶帳號並賦予該用戶對資料庫的訪問權限。</li>
    <li>使以下目錄和文件可寫：%s</li>
    <li>為了安全考慮，強烈建議將以下兩個目錄移出 <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">文件根目錄</a>，並更改文件夾名稱：%s</li>
    <li>創建（如果尚未存在）並使以下目錄可寫：%s</li>
    <li>開啟瀏覽器的 cookies 和 JavaScript。</li>
</ol>
<h3>特殊說明</h3>
<p>某些特定的系統軟體組合可能需要額外的配置才能與 XOOPS 一起工作。如果這些主題適用於您的環境，請參閱完整的
 <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS 安裝手冊</a> 以獲取更多資訊。
</p>
<p>MySQL 8.0 並非在所有 PHP 版本中都被支援。即使在支援的版本中，PHP <em>mysqlnd</em> 函式庫的問題可能會要求將 MySQL 伺服器的 <em>default-authentication-plugin</em>
 設定為 <em>mysql_native_password</em>，才能正確運行。
</p>
<p>啟用 SELinux 的系統（如 CentOS 和 RHEL）可能需要更改 XOOPS 目錄的安全上下文，除了常規的檔案權限外，才能使目錄可寫。
請參閱您的系統文檔或聯繫系統管理員。
</p>
';


return $content;

