xoopseditor 為 XOOPS 提供了一組編輯器

使用者指南：

1 檢查 /xoopseditor/ 下的檔案 xoops_version.php 以確保它比您目前的版本更新

2 上传 /xoopseditor/ 到 /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 配置適用的首選項
3.1 ./dhtmlext(all editors)/language/: 根據 english.php 製作本地語言文件
3.3 ./dhtmlext(all editors)/editor_registry.php: 設定編輯器的設定： order - 使用編輯器選擇時的顯示順序，0 表示停用； nohtml - 適用於非 html 語法
3.3 ./FCKeditor/module/：將檔案複製到模組資料夾，以防需要模組特定的上傳權限、儲存和編輯器選項
3.3.1 ./FCKeditor/module/fckeditor.config.js：對於編輯器選項，通常不需要更改它
3.3.2 ./FCKeditor/module/fckeditor.connector.php：指定檔案瀏覽（及上傳儲存）的資料夾 => XOOPS/uploads/XOOPS_FCK_FOLDER/，此資料夾需手動建立
3.3.3 ./FCKeditor/module/fckeditor.upload.php：指定上傳權限和上傳存儲
3.4 XOOPS/uploads/fckeditor/：啟用FCKeditor時建立資料夾，用於未指定上傳資料夾的上傳
3.5 ./tinymce/tinymce/jscripts/: 從 http://tinymce.moxiecode.com/language.php 下載本地語言文件

4 檢查檔案名稱：對於檔案名稱區分大小寫的系統，請確保檔案名稱面正確，即「FCKeditor」與「fckeditor」不同

5 檢查 /xoopseditor/sampleform.inc.php 取得開發指南
