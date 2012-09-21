<?php
/** 
*
* acp_styles [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'ערכות התמונה כוללות את כל הכפתורים ושאר האמצעים הגרפיים המשומשים במערכת הפורומים. כאן באפשרותך לערוך, לייצא או למחוק ערכות תמונה קיימות ולייבא או להפעיל ערכות חדשות.',
	'ACP_STYLES_EXPLAIN'	=> 'כאן באפשרותך לנהל עיצובים קיימים במערכת הפורומים שלך. עיצוב מורכב מתבנית עיצוב, סגנון עיצוב ומערכות תמונה. באפשרותך לשנות, למחוק, להפעיל, לבטל, ליצור או לייבא עיצובים חדשים. באפשרותך גם לראות תצוגה מקדימה של העיצוב. עיצוב ברירת המחדל הנוכחי מסומן על ידי סימן הכוכבית (*). בנוסף ישנה האפשרות לראות כמה משתמשים (או רובוטים) השתמשו בעיצובים ברשימתך.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'ערכה מכילה את כל הקוד אשר בשימוש ליצירת מבנה המערכת. כאן אתה יכול לערוך ערכות קיימות, למחוק, לייצא, לייבא ולצפות בתצוגה מקדימה של הערכות. תוכל גם לשנות את קוד הערכה שבשימוש ליצירת BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'כאן אתה יכול ליצור, להתקין, לערוך, למחוק ולייצא סגנונות. סגנון הוא שילוב של צבעים ותמונות אשר כלולים בתבנית שלך על מנת ליצור את המראה הבסיסי של הפורום שלך. טווח האפשרויות שלך תלוי בהגדרות השרת ובתהליך ההתקנה של phpBB שבוצע על ידך,עיין במדריך לקבלת פרטים נוספים. אנא שים לב שבעת יצירת סגנון חדש, שימוש בעיצוב קיים כבסיס הנו ניתן לבחירה.',
	'ADD_IMAGESET'			=> 'צור ערכת תמונה',
	'ADD_IMAGESET_EXPLAIN'	=> 'כאן אתה יכול ליצור ערכת תמונה חדשה. טווח האפשרויות שלך תלוי בעיקר בהגדרות השרת והרשאות הקבצים שלך. לדוגמא אתה תוכל לבסס את ערכת התמונה שלך על ערכה קיימת. אתה בנוסף תוכל להעלות או לייבא (מתיקיית האחסון) ארכיון ערכות תמונה. אם אתה אכן מעלה ארכיון ערכות תמונה, ישנה אפשרות ששם ערכת התמונה יילקח משם הארכיון (על מנת לעשות זאת השאר את שדה השם של ערכת התמונה ריק).',
	'ADD_STYLE'				=> 'צור עיצוב',
	'ADD_STYLE_EXPLAIN'		=> 'כאן אתה יכול ליצור עיצוב חדש. טווח האפשרויות שלך תלוי בעיקר בהגדרות השרת שלך. לדוגמא, תהיה לך האפשרות לבסס את העיצוב הזה על עיצוב קיים. בנוסף תהיה לך גם האפשרות לייבא ארכיון עיצובים. אם אתה מייבא ארכיון, שם העיצוב יקבע באופן אוטומטי.',
	'ADD_TEMPLATE'			=> 'צור תבנית עיצוב',
	'ADD_TEMPLATE_EXPLAIN'	=> 'כאן אתה יכול להוסיף תבניות עיצוב חדשות. טווח האפשרויות שלך תלוי בהגדרות השרת ובהרשאות הקבצים שלך. לדוגמא, בהתאם להרשאותיך, תוכל לבסס את תבניות העיצוב שתיצור על תבניות עיצוב קיימות. בנוסף תוכל גם להעלות או לייבא (מתיקיית האחסון) ארכיון תבניות עיצוב. אם אתה אכן מעלה אחד, באפשרותך לבחור ששם תבנית העיצוב ילקח מהארכיון (על מנת לעשות זאת השאר את שדה השם ריק).',
	'ADD_THEME'				=> 'צור סגנון עיצוב',
	'ADD_THEME_EXPLAIN'		=> 'כאן אתה יכול להוסיף סגנונות עיצוב חדשים. טווח האפשרויות שלך תלוי בהגדרות השרת ובהרשאות הקבצים שלך. לדוגמא, בהתאם להרשאותיך, תוכל לבסס את תבניות העיצוב שתיצור על תבניות עיצוב קיימות. בנוסף תוכל גם להעלות או לייבא (מתיקיית האחסון) ארכיון סגנונות עיצוב. אם אתה אכן מעלה אחד, באפשרותך לבחור ששם סגנון העיצוב ילקח מהארכיון (על מנת לעשות זאת השאר את שדה השם ריק). העיצוב ילקח מהארכיון (על מנת לעשות זאת השאר את שדה השם ריק).',
	'ARCHIVE_FORMAT'		=> 'ארכיון פורמטי קבצים',
	'AUTOMATIC_EXPLAIN'		=> 'השאר ריק כדי לנסות מחיקה אוטומטית.',

	'BACKGROUND'			=> 'רקע',
	'BACKGROUND_COLOUR'		=> 'צבע רקע',
	'BACKGROUND_IMAGE'		=> 'תמונת רקע',
	'BACKGROUND_REPEAT'		=> 'חזרת רקע',
	'BOLD'					=> 'הדגשה',

	'CACHE'							=> 'זכרון מטמון',
	'CACHE_CACHED'					=> 'בזכרון מטמון',
	'CACHE_FILENAME'				=> 'קובץ תבנית עיצוב',
	'CACHE_FILESIZE'				=> 'גודל קובץ',
	'CACHE_MODIFIED'				=> 'שונה',
	'CONFIRM_IMAGESET_REFRESH'		=> 'אתה בטוח שאתה רוצה לרענן את כל נתוני ערכת התמונות? הנתונים מקובץ הגדרות ערכת התמונות יעברו על כל התוספות לערכת התמונות אשר התבצעו עם עורך ערכת התמונות.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'אתה בטוח שאתה רוצה להסיר את כל הגרסאות שבזכרון המטמון של קבצי הערכה?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'אתה בטוח שאתה רוצה לרענן את כל נתוני הערכה בבסיס הנתונים עם תוכן קבצי הערכה במערכת הקבצים? הפעולה תעבור על כל התוספות אשר התבצעו עם עורך הערכה כאשר היא הייתה מאוחסנת בבסיס הנתונים.',
	'CONFIRM_THEME_REFRESH'			=> 'אתה בטוח שאתה רוצה לרענן את סגנון העיצוב המאוחסן בבסיס הנתונים עם תוכן סגנון העיצוב במערכת הקבצים? הפעולה תעבור על כל התוספות אשר התבצעו עם עורך סגנון העיצוב כאשר הוא היה מאוחסן בבסיס הנתונים.',
	'COPYRIGHT'						=> 'זכויות יוצרים',
	'CREATE_IMAGESET'				=> 'צור ערכת תמונה חדשה',
	'CREATE_STYLE'					=> 'צור עיצוב חדש',
	'CREATE_TEMPLATE'				=> 'צור ערכת תבנית עיצוב חדשה',
	'CREATE_THEME'					=> 'צור סגנון עיצוב חדש',
	'CURRENT_IMAGE'					=> 'תמונה נוכחית',

	'DEACTIVATE_DEFAULT'		=> 'אינך יכול להפוך את עיצוב ברירת המחדל ללא לפעיל',
	'DELETE_FROM_FS'			=> 'מחק מקבצי המערכת',
	'DELETE_IMAGESET'			=> 'מחק ערכת תמונה',
	'DELETE_IMAGESET_EXPLAIN'	=> 'כאן אתה יכול למחוק ערכות תמונה מבסיס הנתונים. אנא שים לב כי אין אפשרות שחזור. מומלץ קודם לייצא את התבנית לאפשרות של שימוש בעתיד.',
	'DELETE_STYLE'				=> 'מחק עיצוב',
	'DELETE_STYLE_EXPLAIN'		=> 'כאן אתה יכול למחוק עיצובים. שים לב למחיקת העיצובים, אין אפשרות שחזור.',
	'DELETE_TEMPLATE'			=> 'מחק תבנית עיצוב',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'כאן אתה יכול למחוק תבניות עיצוב מבסיס הנתונים. אנא שים לב כי אין אפשרות שחזור. מומלץ קודם לייצא את התבנית לאפשרות של שימוש בעתיד.',
	'DELETE_THEME'				=> 'מחק סגנון עיצוב',
	'DELETE_THEME_EXPLAIN'		=> 'כאן אתה יכול למחוק סגנונות עיצוב מבסיס הנתונים. אנא שים לב כי אין אפשרות שחזור. מומלץ קודם לייצא את הסגנון לאפשרות של שימוש בעתיד.',
	'DETAILS'					=> 'פרטים',
	'DIMENSIONS_EXPLAIN'		=> 'בחירה בכן תכליל את פרמטרים של רוחב/גובה',

	'EDIT_DETAILS_IMAGESET'				=> 'ערוך פרטי ערכת תמונה',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'כאן אתה יכול לערוך פרטים מסויימים של ערכות תמונה כגון שם.',
	'EDIT_DETAILS_STYLE'				=> 'ערוך עיצוב',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'בטופס זה אתה יכול לשנות תכונות של עיצוב קיים. אתה יכול לשנות את השילוב של תבנית העיצוב, סגנון העיצוב וערכת התמונה אשר מגדירים את העיצוב עצמו. אתה גם יכול להגדיר את העיצוב כעיצוב ברירת המחדל.',
	'EDIT_DETAILS_TEMPLATE'				=> 'ערוך פרטי תבנית עיצוב',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'כאן אתה יכול לערוך פרטים מסויימים של תבניות עיצוב כמו השם. בנוסף יש לך גם האפשרות להעביר את אחסון גיליון העיצוב מקבצי המערכת לבסיס הנתונים. האפשרות הזו תלויה בהגדרות ה־PHP בשרת שלך.',
	'EDIT_DETAILS_THEME'				=> 'ערוך פרטי סגנון עיצוב',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'כאן אתה יכול לערוך פרטים מסויימים של סגנונות עיצוב כמו השם. בנוסף יש לך גם האפשרות להעביר את אחסון גיליון העיצוב מקבצי המערכת לבסיס הנתונים. האפשרות הזו תלויה בהגדרות ה־PHP בשרת שלך.',
	'EDIT_IMAGESET'						=> 'ערוך ערכת תמונה',
	'EDIT_IMAGESET_EXPLAIN'				=> 'כאן אתה יכול לערוך תמונות אשר מרכיבות את ערכת התמונה. אתה יכול גם לבחור מימדים עבור התמונה. מימדים הם בגדר בחירה, ובחירה בהם עלולה לשנות מאפייני תצוגה בדפדפנים מסויימים. אי בחירה בהם יכולה להיות חיסכון מקום בבסיס הנתונים.',
	'EDIT_TEMPLATE'						=> 'ערוך תבנית עיצוב',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'כאן אתה יכול לעורך תבניות עיצוב באופן ישיר. אנא זכור כי שינויים אלו קבועים ואינם יכולים להיות בלתי גמורים בעת שליחה. אם הגדרות ה־PHP שלך מאפשרות ל־PHP לכתוב בקבצי העיצוב שבתיקיית העיצוב שלך, כל השינויים שיעשו פה יתבצעו גם בקבצים האלו. אם PHP לא מאופשרת לעשות זאת כל השינויים יועתקו אל בסיס הנתונים בלבד. אנא דאג, בעת העריכה לסגור את כל המשתנים כהלכה {XXXX} וכמו כן גם משפטי תנאי.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'קובץ העיצוב אינו ניתן לכתיבה לכן ערכת העיצוב מאוחסנת בסיס הנתונים המכיל את הקובץ מעודכן.',
	'EDIT_THEME'						=> 'ערוך סגנון עיצוב',
	'EDIT_THEME_EXPLAIN'				=> 'כאן באפשרותך לערוך סגנונות נבחרים, לשנות צבעים, תמונות וכדומה.',
	'EDIT_THEME_STORED_DB'				=> 'קובץ גיליון העיצוב לא ניתן היה לכתיבה לכן הוא מאוכסן כעת בבסיס הנתונים בהתאם להגדרותיך.',
	'EDIT_THEME_STORE_PARSED'			=> 'סגנון העיצוב דורש שגליון הסגנון שלו ינותח. ניתן לעשות זאת רק אם הוא מאוחסן בבסיס הנתונים.',
	'EDITOR_DISABLED'					=> 'עורך תבנית העיצוב כבוי.',
	'EXPORT'							=> 'ייצא',

	'FOREGROUND'			=> 'רקע קדמי',
	'FONT_COLOUR'			=> 'צבע גופן',
	'FONT_FACE'				=> 'גופן',
	'FONT_FACE_EXPLAIN'		=> 'יש באפשרותך לבחור מספר פונטים על ידי הפרדם בפסיקים. אם למשתמש אחד הפונטים אינו מותקן על המחשב, הבא המותקן אחריו יעבוד עבורו.',
	'FONT_SIZE'				=> 'גודל גופן',

	'GLOBAL_IMAGES'			=> 'גלובאלי',

	'HIDE_CSS'				=> 'הסתר CSS חדש',

	'IMAGE_WIDTH'				=> 'רוחב תמונה',
	'IMAGE_HEIGHT'				=> 'גובה תמונה',
	'IMAGE'						=> 'תמונה',
	'IMAGE_NAME'				=> 'שם תמונה',
	'IMAGE_PARAMETER'			=> 'פרמטר',
	'IMAGE_VALUE'				=> 'ערך',
	'IMAGESET_ADDED'			=> 'ערכת תמונה חדשה נוספה לקבצי המערכת.',
	'IMAGESET_ADDED_DB'			=> 'ערכת תמונה חדשה נוספה לבסיס הנתונים.',
	'IMAGESET_DELETED'			=> 'ערכת התמונה נמחקה בהצלחה.',
	'IMAGESET_DELETED_FS'		=> 'ערכת התמונה נמחקה בהצלחה מבסיס הנתונים, אך קבצים מסויימים עלולים להישאר בין קבצי המערכת',
	'IMAGESET_DETAILS_UPDATED'	=> 'פרטי ערכת התמונה עודכנו בהצלחה.',
	'IMAGESET_ERR_ARCHIVE'		=> 'אנא בחר מתודת ארכיון.',
	'IMAGESET_ERR_COPY_LONG'	=> 'זכויות היוצרים אינם יכולים להכיל יותר מ־60 תווים',
	'IMAGESET_ERR_NAME_CHARS'	=> 'שם ערכת התמונה יכול להכיל רק מספרים, אותיות, התווים, -, +, _ ורווח.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'שם ערכת התמונה שבחרת כבר קיים במערכת',
	'IMAGESET_ERR_NAME_LONG'	=> 'שם ערכת התמונה אינו יכול להכיל יותר מ־30 תווים',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'הארכיון שבחרת אינו מכיל ערכת תמונה תקינה.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'אתה חייב לקבוע שם עבור ערכת תמונה זו.',
	'IMAGESET_EXPORT'			=> 'ייצא ערכת תמונה',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'כאן אתה יכול לייצא ערכות תמונה בתור ארכיון. הארכיון יכיל את כל המידע הדרוש להתקנת ערכת התמונה בפורום אחר. באפשרותך לבחור אם להוריד את קובץ הארכיון ישירות או למקם אותו בתיקיית האחסון שלך ולהוריד אותו דרך FTP.',
	'IMAGESET_EXPORTED'			=> 'ערכת התמונה יוצאה בהצלחה ואוחסנה ב%s.',
	'IMAGESET_NAME'				=> 'שם ערכת תמונה',
	'IMAGESET_REFRESHED'		=> 'ערכת התמונה רועננה בהצלחה.',
	'IMAGESET_UPDATED'			=> 'ערכת התמונה עודכנה בהצלחה',
	'ITALIC'					=> 'כתב נטוי',

	'IMG_CAT_BUTTONS'		=> 'כפתורים מקומיים',
	'IMG_CAT_CUSTOM'		=> 'תמונות מותאמות',
	'IMG_CAT_FOLDERS'		=> 'איקוניי הודעה',
	'IMG_CAT_FORUMS'		=> 'איקוניי פורום',
	'IMG_CAT_ICONS'			=> 'איקונים כלליים',
	'IMG_CAT_LOGOS'			=> 'לוגואים',
	'IMG_CAT_POLLS'			=> 'תמונות סקר',
	'IMG_CAT_UI'			=> 'אלמנטי ממשק כלליים למשתמש',
	'IMG_CAT_USER'			=> 'תמונות נוספות',

	'IMG_SITE_LOGO'			=> 'לוגו ראשי',
	'IMG_UPLOAD_BAR'		=> 'העלה באר התקדמות',
	'IMG_POLL_LEFT'			=> 'קצה שמאלי',
	'IMG_POLL_CENTER'		=> 'מרכז',
	'IMG_POLL_RIGHT'		=> 'קצה ימני',
	'IMG_ICON_FRIEND'		=> 'הוסף כחבר',
	'IMG_ICON_FOE'			=> 'הוסף נודניק',

	'IMG_FORUM_LINK'			=> 'קישור לפורום',
	'IMG_FORUM_READ'			=> 'פורום',
	'IMG_FORUM_READ_LOCKED'		=> 'פורום נעול',
	'IMG_FORUM_READ_SUBFORUM'	=> 'תת פורום',
	'IMG_FORUM_UNREAD'			=> 'הודעות שלא נקראו בפורום',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'הודעות נעולות שלא נקראו בפורום',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'הודעות שלא נקראו בתת פורום',
	'IMG_SUBFORUM_READ'			=> 'מקרא תת פורום',
	'IMG_SUBFORUM_UNREAD'		=> 'מקרא הודעות שלא נקראו בתת פורום',
	
	'IMG_TOPIC_MOVED'			=> 'הנושא הועבר',

	'IMG_TOPIC_READ'				=> 'נושא',
	'IMG_TOPIC_READ_MINE'			=> 'הנושא נשלח ל',
	'IMG_TOPIC_READ_HOT'			=> 'נושא חם',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'נושא חם נשלח ל',
	'IMG_TOPIC_READ_LOCKED'			=> 'נעול',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'נושא נעול נשלח ל',

	'IMG_TOPIC_UNREAD'				=> 'תגובות שלא נקראו בנושא',
	'IMG_TOPIC_UNREAD_MINE'			=> 'נושא נשלח ל',
	'IMG_TOPIC_UNREAD_HOT'			=> 'נושא חם נשלח ל',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'נושא חם נשלח ל',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'נושא נעול שלא נקרא',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'נושא נעול נשלח ל',

	'IMG_STICKY_READ'				=> 'נושא דביק',
	'IMG_STICKY_READ_MINE'			=> 'נושא דביק נשלח ל',
	'IMG_STICKY_READ_LOCKED'		=> 'נושא דביק נעול',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'נושא דביק נעול נשלח ל',
	'IMG_STICKY_UNREAD'				=> 'נושאים דביקים נעולים שלא נקראו',
	'IMG_STICKY_UNREAD_MINE'		=> 'נושא דביק נשלח ל',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'נושאים דביקים נעולים שלא נקראו',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'נושא דביק נעול נשלח ל',

	'IMG_ANNOUNCE_READ'					=> 'הכרזה',
	'IMG_ANNOUNCE_READ_MINE'			=> 'הכרזה נשלחה ל',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'הכרזה נעולה',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'הכרזה נעולה נשלחה ל',
	'IMG_ANNOUNCE_UNREAD'				=> 'הכרזות שלא נקראו',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'הכרזה נשלחה ל',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'הכרזות נעולות שלא נקראו',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'הכרזה נעולה נשלחה ל',

	'IMG_GLOBAL_READ'					=> 'הכרזה גלובאלית',
	'IMG_GLOBAL_READ_MINE'				=> 'הכרזה גלובאלית',
	'IMG_GLOBAL_READ_LOCKED'			=> 'הכרזה גלובאלית נעולה',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'הכרזה גלובאלית נעולה נשלחה ל',
	'IMG_GLOBAL_UNREAD'					=> 'הכרזות גלובאליות שלא נקראו',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'הכרזה גלובאלית נשלחה ל',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'הכרזות גלובאליות נעולות שלא נקראו',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'הכרזה גלובאלית נעולה נשלחה ל',

	'IMG_PM_READ'		=> 'קרא הודעות פרטיות',
	'IMG_PM_UNREAD'		=> 'הודעה פרטית שלא נקראה',

	'IMG_ICON_BACK_TOP'		=> 'למעלה',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'שלח דואר אלקטרוני',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'שלח ה. פרטית',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'אתר',

	'IMG_ICON_POST_DELETE'			=> 'מחק',
	'IMG_ICON_POST_EDIT'			=> 'ערוך',
	'IMG_ICON_POST_INFO'			=> 'הצג פרטי הודעה',
	'IMG_ICON_POST_QUOTE'			=> 'צטט',
	'IMG_ICON_POST_REPORT'			=> 'דווח',
	'IMG_ICON_POST_TARGET'			=> 'מיני הודעה',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'מיני הודעה חדשה',


	'IMG_ICON_TOPIC_ATTACH'			=> 'קבצים מצורפים',
	'IMG_ICON_TOPIC_LATEST'			=> 'הודעה אחרונה',
	'IMG_ICON_TOPIC_NEWEST'			=> 'הודעה שלא נקראה אחרונה',
	'IMG_ICON_TOPIC_REPORTED'		=> 'הודעה דווחה',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'הודעה לא אושרה',

	'IMG_ICON_USER_ONLINE'		=> 'המשתמש מחובר',
	'IMG_ICON_USER_OFFLINE'		=> 'לא מחובר',
	'IMG_ICON_USER_PROFILE'		=> 'הצג כרטיס אישי',
	'IMG_ICON_USER_SEARCH'		=> 'חפש הודעות',
	'IMG_ICON_USER_WARN'		=> 'הזהר משתמש',

	'IMG_BUTTON_PM_FORWARD'		=> 'העבר הודעה פרטית',
	'IMG_BUTTON_PM_NEW'			=> 'הודעה פרטית חדשה',
	'IMG_BUTTON_PM_REPLY'		=> 'תגובה',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'נעול',
	'IMG_BUTTON_TOPIC_NEW'		=> 'נושא חדש',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'תגובה חדשה',

	'IMG_USER_ICON1'		=> 'משתמש הגדיר תמונה 1',
	'IMG_USER_ICON2'		=> 'משתמש הגדיר תמונה 2',
	'IMG_USER_ICON3'		=> 'משתמש הגדיר תמונה 3',
	'IMG_USER_ICON4'		=> 'משתמש הגדיר תמונה 4',
	'IMG_USER_ICON5'		=> 'משתמש הגדיר תמונה 5',
	'IMG_USER_ICON6'		=> 'משתמש הגדיר תמונה 6',
	'IMG_USER_ICON7'		=> 'משתמש הגדיר תמונה 7',
	'IMG_USER_ICON8'		=> 'משתמש הגדיר תמונה 8',
	'IMG_USER_ICON9'		=> 'משתמש הגדיר תמונה 9',
	'IMG_USER_ICON10'		=> 'משתמש הגדיר תמונה 10',

	'INACTIVE_STYLES'			=> 'עיצוב לא פעיל',
	'INCLUDE_DIMENSIONS'		=> 'הכלל ממדים',
	'INCLUDE_IMAGESET'			=> 'כלול ערכת תמונה',
	'INCLUDE_TEMPLATE'			=> 'כלול תבנית עיצוב',
	'INCLUDE_THEME'				=> 'כלול סגנון עיצוב',
	'INHERITING_FROM'			=> 'העתק מ',
	'INSTALL_IMAGESET'			=> 'התקן ערכת תמונה',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'כאן אתה יכול להתקין את ערכת התמונה שבחרת. אתה יכול לערוך פרטים מסויימים בהתקנה או להשתמש בהגדרות ברירת המחדל.',
	'INSTALL_STYLE'				=> 'התקן עיצוב',
	'INSTALL_STYLE_EXPLAIN'		=> 'כאן אתה יכול להתקין עיצוב חדש ואם קיימים, פריטי העיצוב הנלווים. אם יש בבעלותך כבר את פרטי העיצוב הדרושים מותקנים הם לא ישונו. כמה עיצובים דורשים פריטי עיצובקיימים כבר מותקנים. אם אתה מנסה התקנת עיצוב ואין לך את הפריטים הדרושים, תקבל על כך הודעה.',
	'INSTALL_TEMPLATE'			=> 'התקן תבנית עיצוב',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'כאן אתה יכול להתקין תבנית עיצוב חדשה. טווח האפשרויות שלך תלוי בעיקר בהגדרות השרת שלך.',
	'INSTALL_THEME'				=> 'התקן סגנון עיצוב',
	'INSTALL_THEME_EXPLAIN'		=> 'כאן אתה יכול להתקין סגנונות שבחרת. אתה יכול לערוך פרטים מסויימים בהתקנה או להשתמש באפשרויות ברירת המחדל.',
	'INSTALLED_IMAGESET'		=> 'ערכות תמונה מותקנות',
	'INSTALLED_STYLE'			=> 'עיצובים מותקנים',
	'INSTALLED_TEMPLATE'		=> 'תבניות עיצוב מותקנות',
	'INSTALLED_THEME'			=> 'סגנונות עיצוב מותקנים',

	'KEEP_IMAGESET'				=> 'שמור “%s” ערכת תמונה',
	'KEEP_TEMPLATE'				=> 'שמור “%s” תבנית',
	'KEEP_THEME'				=> 'שמור “%s” סגנון',

	'LINE_SPACING'				=> 'רווח שורה',
	'LOCALISED_IMAGES'			=> 'מקומיים',
	'LOCATION_DISABLED_EXPLAIN'	=> 'הגדרה זו הועתקה ולא יכולה להשתנות.',

	'NO_CLASS'					=> 'המחלקה לא נמצאה בגיליון העיצוב',
	'NO_IMAGESET'				=> 'ערכת התמונה לא נמצא בקבצי המערכת.',
	'NO_IMAGE'					=> 'ללא תמונה',
	'NO_IMAGE_ERROR'			=> 'התמונה לא נמצאה בקבצי המערכת',
	'NO_STYLE'					=> 'העיצוב לא נמצא בקבצי המערכת',
	'NO_TEMPLATE'				=> 'תבנית העיצוב לא נמצאה בקבצי המערכת.',
	'NO_THEME'					=> 'סגנון העיצוב לא נמצא בקבצי המערכת.',
	'NO_UNINSTALLED_IMAGESET'	=> 'לא זוהו ערכות תמונה שהוסרו.',
	'NO_UNINSTALLED_STYLE'		=> 'לא זוהו עיצובים שהוסרו.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'לא זוהו תבניות עיצוב שהוסרו.',
	'NO_UNINSTALLED_THEME'		=> 'לא זוהו סגנונות שהוסרו.',
	'NO_UNIT'					=> 'ללא',

	'ONLY_IMAGESET'			=> 'אינך יכול למחוק את ערכת התמונה היחידה שישנה במאגר שלך.',
	'ONLY_STYLE'			=> 'אינך יכול למחוק את העיצוב היחיד שישנו במאגר שלך.',
	'ONLY_TEMPLATE'			=> 'אינך יכול למחוק את תבנית העיצוב היחידה שישנה במאגר שלך.',
	'ONLY_THEME'			=> 'אינך יכול למחוק את הסגנון היחיד שישנו במאגר שלך.',
	'OPTIONAL_BASIS'		=> 'יסודות אופציונאליים',

	'REFRESH'					=> 'רענן',
	'REPEAT_NO'					=> 'ללא',
	'REPEAT_X'					=> 'מאוזן בלבד',
	'REPEAT_Y'					=> 'מאונך בלבד',
	'REPEAT_ALL'				=> 'שני הכיוונים',
	'REPLACE_IMAGESET'			=> 'החלף ערכת תמונה עם',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'ערכת תמונה זו תחליף את ערכת התמונה אותה אתה מוחק בכל עיצוב העושה בה שימוש.',
	'REPLACE_STYLE'				=> 'החלף עיצוב עם',
	'REPLACE_STYLE_EXPLAIN'		=> 'עיצוב זה יחליף את העיצוב אותו אתה מוחק עבור משתמשים המשתמשים בו כעיצוב ברירת מחדל.',
	'REPLACE_TEMPLATE'			=> 'החלף תבנית עיצוב עם',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'תבנית עיצוב זו תחליף את תבנית העיצוב אותה אתה מוחק בכל עיצוב העושה בה שימוש.',
	'REPLACE_THEME'				=> 'החלף סגנון עיצוב עם',
	'REPLACE_THEME_EXPLAIN'		=> 'הסגנון הזה יחליף את הסגנון אותו אתה מוחק בכל עיצוב שנעשה בו שימוש כסגנון.',
	'REPLACE_WITH_OPTION'		=> 'החלף עם “%s”',
	'REQUIRES_IMAGESET'			=> 'העיצוב הזה דורש שערכת התמונה %s תיהיה מותקנת.',
	'REQUIRES_TEMPLATE'			=> 'העיצוב הזה דורש שתבנית העיצוב %s תיהיה מותקנת.',
	'REQUIRES_THEME'			=> 'העיצוב הזה דורש שהסגנון %s יהיה מותקן.',

	'SELECT_IMAGE'				=> 'בחר תמונה',
	'SELECT_TEMPLATE'			=> 'בחר קובץ תבנית עיצוב',
	'SELECT_THEME'				=> 'בחר קובץ סגנון עיצוב',
	'SELECTED_IMAGE'			=> 'תמונה שנבחרה',
	'SELECTED_IMAGESET'			=> 'ערכת תמונה שנבחרה',
	'SELECTED_TEMPLATE'			=> 'תבנית עיצוב שנבחרה',
	'SELECTED_TEMPLATE_FILE'		=> 'קובץ תבנית עיצוב שנבחר',
	'SELECTED_THEME'			=> 'סגנון עיצוב שנבחר',
	'SELECTED_THEME_FILE'			=> 'קובץ סגנון עיצוב שנבחר',
	'STORE_DATABASE'			=> 'בסיס נתונים',
	'STORE_FILESYSTEM'			=> 'מערכת קבצים',
	'STYLE_ACTIVATE'			=> 'הפוך לפעיל',
	'STYLE_ACTIVE'				=> 'פעיל',
	'STYLE_ADDED'				=> 'העיצוב נוסף בהצלחה.',
	'STYLE_DEACTIVATE'			=> 'הפוך ללא פעיל',
	'STYLE_DEFAULT'				=> 'הפוך לעיצוב ברירת מחדל',
	'STYLE_DELETED'				=> 'העיצוב נמחק בהצלחה.',
	'STYLE_DETAILS_UPDATED'		=> 'העיצוב נערך בהצלחה.',
	'STYLE_ERR_ARCHIVE'			=> 'אנא בחר את מתודת הארכיון.',
	'STYLE_ERR_COPY_LONG'		=> 'אורך זכויות היוצרים אינו יכול לעלות על 60 תווים.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'אתה חייב לבחור לפחות אלמנט עיצוב אחד.',
	'STYLE_ERR_NAME_CHARS'		=> 'שם העיצוב יכול להכיל רק מספרים, אותיות, התווים, -, +, _ ורווח.',
	'STYLE_ERR_NAME_EXIST'		=> 'שם העיצוב שבחרת כבר קיים במערכת, אנא בחר שם אחר.',
	'STYLE_ERR_NAME_LONG'		=> 'אורך שם העיצוב אינו יכול לעלות על 30 תווים.',
	'STYLE_ERR_NO_IDS'			=> 'אתה חייב לבחור תבנית עיצוב, סגנון עיצוב וערכת תמונה לעיצוב זה.',
	'STYLE_ERR_NOT_STYLE'		=> 'הקובץ שהעלית או ייבאת אינו מכיל ארכיון עיצובים תקני.',
	'STYLE_ERR_STYLE_NAME'		=> 'אתה חייב לקבוע שם עבור עיצוב זה.',
	'STYLE_EXPORT'				=> 'ייצא עיצוב',
	'STYLE_EXPORT_EXPLAIN'		=> 'כאן אתה יכול לייצא עיצוב בתור ספרייה. עיצוב לא צריך להכיל את כל האלמנטים הדרושים, אך חייב להכיל לפחות אחד. לדוגמא אם ייצרת סגנון וערכת תמונה אינך מוכרח לייצא גם תבנית עיצוב. באפשרותך לבחור אם להוריד את הקובץ ישירות או לאחסן אותו בתיקיית האחסון שלך ולהוריד אותו אחר כך דרך FTP.',
	'STYLE_EXPORTED'			=> 'העיצוב יוצא בהצלחה ואוחסן ב%s.',
	'STYLE_IMAGESET'			=> 'ערכת תמונה',
	'STYLE_NAME'				=> 'שם עיצוב',
	'STYLE_TEMPLATE'			=> 'תבנית עיצוב',
	'STYLE_THEME'				=> 'סגנון עיצוב',
	'STYLE_USED_BY'				=> 'שומש על ידי (כולל רובוטים)',

	'TEMPLATE_ADDED'			=> 'תבנית העיצוב נוספה בהצלחה ואוחסנה בקבצי המערכת.',
	'TEMPLATE_ADDED_DB'			=> 'ערכת תבנית העיצוב נוספה בהצלחה לבסיס הנתונים.',
	'TEMPLATE_CACHE'			=> 'זכרון מטמון של ערכה',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'כברירת מחדל phpBB שומרת בזכרון המטמון את הגרסאות המהודרות של הערכות. הפעולה מקטינה את טעינת השרת בכל פעם שעמוד נצפה וכך ניתן להקטין את זמן יצירת העמוד. כאן אתה יכול לראות את מצב זכרון המטמון של כל קובץ ולמחוק קבצים יחידים או זכרון המטמון כולו.',
	'TEMPLATE_CACHE_CLEARED'	=> 'זכרון המטמון של הערכה הוסר בהצלחה.',
	'TEMPLATE_CACHE_EMPTY'		=> 'אין ערכות בזכרון המטמון.',
	'TEMPLATE_DELETED'			=> 'תבנית העיצוב נמחקה בהצלחה.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'תבנית העיצוב לא יכולה להמחק מכיוון שיש תבנית אחת או יותר אשר הועתקו ממנה:',
	'TEMPLATE_DELETED_FS'		=> 'תבנית העיצוב נמחקה בהצלחה מבסיס הנתונים אך קבצים מסויימים נשארו בקבצי המערכת.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'פרטי תבנית העיצוב עודכנו בהצלחה.',
	'TEMPLATE_EDITOR'			=> 'עריכת קוד HTML של עיצוב',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'גובה חלון עריכה',
	'TEMPLATE_ERR_ARCHIVE'		=> 'אנא בחר מתודת ספרייה',
	'TEMPLATE_ERR_CACHE_READ'	=> 'התיקייה cache אשר בשימוש לאחסון גרסאות קבצי הערכה בזכרון המטמון לא ניתנת להפתח.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'אורך זכויות היוצרים אינו יכול לעלות על 60 תווים.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'שם תבנית העיצוב יכול להכיל מספרים אותיות ואת הסימנים -, +, _ בלבד..',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'שם תבנית העיצוב שבחרת כבר קיים במערכת, אנא בחר שם אחר.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'שם תבנית העיצוב אינו יכול להכיל יותר מכ־30 תווים.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'הספרייה שבחרת אינה מכילה תבנית עיצוב תקינה.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE'	=> 'תבנית העיצוב החדשה דורשת שתבנית העיצוב %s תיהיה מותקנת ולא מועתקת מעצמה. ',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'אתה חייב לקבוע שם עבור תבנית העיצוב.',
	'TEMPLATE_EXPORT'			=> 'ייצא תבניות עיצוב',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'כאן אתה יכול לייצא תבנית עיצוב כספרייה. הספרייה הזו תכיל את כל המידע הנחוץ להתקנת תבנית העיצוב על פורום אחר. באפשרותך לבחור האם להוריד את הקובץ ישירות או לאחסן אותו בתיקיית האחסון שלך ולהוריד אותו לאחר מכן דרך FTP',
	'TEMPLATE_EXPORTED'			=> 'תבניות העיצב יוצאו בהצלחה ואוחסנו ב %s.',
	'TEMPLATE_FILE'				=> 'קובץ תבנית עיצוב',
	'TEMPLATE_FILE_UPDATED'		=> 'קובץ תבנית העיצוב עודכן בהצלחה.',
	'TEMPLATE_INHERITS'			=> 'תבנית העיצוב מועתקת מ%s ולכן לא יכולה להיות בעלת הגדרות איחסון שונות מהתבנית ממנה הועתקה.',
	'TEMPLATE_LOCATION'			=> 'אחסן תבניות עיצוב ב',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'תמונות מאוחסנות תמיד בקבצי המערכת.',
	'TEMPLATE_NAME'				=> 'שם תבנית עיצוב',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'לא ניתן לכתוב לקובץ תבנית העיצוב %s. אנא בדוק את ההרשאות של התיקייה ושל הקבצים.',
	'TEMPLATE_REFRESHED'		=> 'תבנית העיצוב רועננה בהצלחה.',

	'THEME_ADDED'				=> 'סגנון חדש נוסף לבסיס הנתונים.',
	'THEME_ADDED_DB'			=> 'סגנון עיצוב חדש נוסף לבסיס הנתונים.',
	'THEME_CLASS_ADDED'			=> 'המחלקה נוספה בהצלחה.',
	'THEME_DELETED'				=> 'הסגנון נמחק בהצלחה.',
	'THEME_DELETED_FS'			=> 'הסגנון נמחק מבסיס הנתונים אך קבצים מסויימים נשארו בקבצי המערכת.',
	'THEME_DETAILS_UPDATED'		=> 'פרטי הסגנון עודכנו בהלצחה.',
	'THEME_EDITOR'				=> 'עורך סגנון עיצוב',
	'THEME_EDITOR_HEIGHT'		=> 'גובה חלון עריכה',
	'THEME_ERR_ARCHIVE'			=> 'אנא בחר מתודת ארכיון.',
	'THEME_ERR_CLASS_CHARS'		=> 'רק תווי אותיות ומספרים פלוס ., :, -, _ ו־# תקינים בשמות מחלקות.',
	'THEME_ERR_COPY_LONG'		=> 'אורך זכויות היוצרים אינו יכול לעלות על 60 תווים.',
	'THEME_ERR_NAME_CHARS'		=> 'שם סגנון העיצוב יכול להכיל אותיות, -, +, _ ורווח.',
	'THEME_ERR_NAME_EXIST'		=> 'שם סגנון העיצוב שבחרת כבר קיים במערכת, אנא בחר שם אחר.',
	'THEME_ERR_NAME_LONG'		=> 'אורך שם סגנון העיצוב אינו יכול לעלות על 30 תווים',
	'THEME_ERR_NOT_THEME'		=> 'הארכיון שבחרת אינו מכיל סגנון עיצוב תקין.',
	'THEME_ERR_REFRESH_FS'		=> 'סגנון העיצוב הזה מאוחסן בקבצי המערכת כך שאין צורך לרענן אותו.',
	'THEME_ERR_STYLE_NAME'		=> 'אתה חייב לקבוע שם עבור סגנון העיצוב..',
	'THEME_FILE'				=> 'קובץ סגנון עיצוב',
	'THEME_EXPORT'				=> 'ייצא סגנון עיצוב',
	'THEME_EXPORT_EXPLAIN'		=> 'כאן אתה יכול לייצא סגנון עיצוב כארכיון. הארכיון הזה יכיל את כל המידע הנחוץ להתקנת הסגנון על פורום אחר. באפשרותך לבחור האם להוריד את הקובץ ישירות או לאחסן אותו בתיקיית האחסון שלך ולהוריד אותו לאחר מכן דרך FTP.',
	'THEME_EXPORTED'			=> 'הסגנון יוצא בהצלחה ואוחסן ב%s.',
	'THEME_LOCATION'			=> 'אחסן גיליון עיצוב ב',
	'THEME_LOCATION_EXPLAIN'	=> 'תמונות מאוחסנות תמיד בקבצי המערכת.',
	'THEME_NAME'				=> 'שם סגנון עיצוב',
	'THEME_REFRESHED'			=> 'הסגנון רוענן בהצלחה.',
	'THEME_UPDATED'				=> 'הסגנון עודכן בהצלחה.',

	'UNDERLINE'				=> 'קו תחתון',
	'UNINSTALLED_IMAGESET'	=> 'ערכות תמונה שהוסרו',
	'UNINSTALLED_STYLE'		=> 'עיצובים שהוסרו',
	'UNINSTALLED_TEMPLATE'	=> 'תבניות עיצוב שהוסרו',
	'UNINSTALLED_THEME'		=> 'סגנונות שהוסרו',
	'UNSET'					=> 'לא מוגדר',

));

?>
