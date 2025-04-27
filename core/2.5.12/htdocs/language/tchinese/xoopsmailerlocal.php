<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');
/**
 * 本地化郵件功能
 *
 * 英文本地化僅供示範
 */
// 請勿更改類別名稱
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * 建構子
     */
    public function __construct()
    {
        parent::__construct();
        // 假設不需要更改字元集
        $this->charSet = strtolower(_CHARSET);
        // 您必須指定語言代碼值，以便檔案存在：XOOPS_ROOT_PATH/class/mail/phpmailer/language/lang-["您的語言代碼"].php
        $this->multimailer->setLanguage('zh-tw');
    }

    /**
     * 建議多位元組語言為 FromName 進行適當的編碼
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // 如果需要，請啟用以下這行
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }


    /**
     * 建議多位元組語言為 Subject 進行適當的編碼
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // 如果需要，請啟用以下這行
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
