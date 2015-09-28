<?php
// specify special caractere to be replaced
$replace = [
    '&lt;' => '', '&gt;' => '', '&#039;' => '', '&amp;' => '',
    '&quot;' => '', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'Ae',
    '&Auml;' => 'A', 'Å' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Æ' => 'Ae',
    'Ç' => '&Ccedil;', 'Ć' => 'C', 'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D',
    'Ð' => 'D', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E',
    'Ę' => 'E', 'Ě' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G',
    'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I',
    'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
    'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'Ł' => 'K', 'Ľ' => 'K',
    'Ĺ' => 'K', 'Ļ' => 'K', 'Ŀ' => 'K', 'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N',
    'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O',
    'Ö' => 'Oe', '&Ouml;' => 'Oe', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O', 'Ŏ' => 'O',
    'Œ' => 'OE', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Š' => 'S',
    'Ş' => 'S', 'Ŝ' => 'S', 'Ș' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
    'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'Ue', 'Ū' => 'U',
    '&Uuml;' => 'Ue', 'Ů' => 'U', 'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U',
    'Ŵ' => 'W', 'Ý' => 'Y', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ž' => 'Z',
    'Ż' => 'Z', 'Þ' => 'T', 'à' => '&agrave;', 'á' => '&aacute;', 'â' => '&acirc;', 'ã' => '&atilde;',
    'ä' => '&auml;', '&auml;' => 'ae', 'å' => '&aring;', 'ā' => 'a', 'ą' => 'a', 'ă' => '&atilde;',
    'æ' => '&aelig;', 'ç' => '&ccedil;', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
    'ď' => 'd', 'đ' => 'd', 'ð' => '&eth;', 'è' => '&egrave;', 'é' => '&eacute;', 'ê' => '&ecirc;',
    'ë' => '&euml;', 'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e',
    'ƒ' => 'f', 'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h',
    'ħ' => 'h', 'ì' => '&igrave;', 'í' => '&iacute;', 'î' => '&icirc;', 'ï' => '&iuml;', 'ī' => 'i',
    'ĩ' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j',
    'ķ' => 'k', 'ĸ' => 'k', 'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l',
    'ŀ' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n',
    'ŋ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => '&ocirc;', 'õ' => '&otilde;', 'ö' => '&ouml;',
    '&ouml;' => 'oe', 'ø' => 'o', 'ō' => '&oacute;', 'ő' => '&otilde;', 'ŏ' => 'o', 'œ' => 'oe',
    'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'š' => 's', 'ù' => '&ugrave;', 'ú' => '&uacute;',
    'û' => '&ucirc;', 'ü' => '&uuml;', 'ū' => 'u', '&uuml;' => 'ue', 'ů' => 'u', 'ű' => 'u',
    'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y',
    'ŷ' => 'y', 'ž' => 'z', 'ż' => 'z', 'ź' => 'z', 'þ' => 't', 'ß' => 'ss',
    'ſ' => 'ss', 'ый' => 'iy', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',
    'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I',
    'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
    'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F',
    'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '',
    'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 'а' => 'a',
    'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
    'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
    'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
    'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e',
    'ю' => 'yu', 'я' => 'ya', '×' => '&times;', '°' => '&deg;', 
    'β' => '&szlig;', 'α' => '&alpha;','∞' => '&infin;', '¤' => '&curren;', '???' => ' ', '+' => ','
];

// specify connection info
$connect = mysql_connect('localhost','root','');
if (!$connect)
{
   die('Could not <span id="IL_AD1" class="IL_AD">
    connect to</span> MySQL: ' . mysql_error());
}

$cid =mysql_select_db('anc-research',$connect); //specify db name

//define('CSV_PATH','import-csv/'); // specify CSV file path

//$csv_file = CSV_PATH . "fabricant.csv"; // Name of your CSV file
$csv_file = "municipality.csv"; // Name of your CSV file
$csvfile = fopen($csv_file, 'r');
$theData = fgets($csvfile);
$i = 0;

mysql_query("TRUNCATE anc_municipality", $connect );
while (!feof($csvfile))
{
   $csv_data[] = fgets($csvfile, 1024);
   $csv_array = explode(",", $csv_data[$i]);
   $insert_csv = array();
   $insert_csv['id_province'] = $csv_array[0];
   $insert_csv['municipality_name'] = $csv_array[1];
  

   $cdate = date("Y-m-j h:i:s A");

   $query = "INSERT INTO anc_municipality (id_province,municipality_name, cdate)
     VALUES('".$insert_csv['id_province']."','".$insert_csv['municipality_name']."', '".$cdate."')";
   $n=mysql_query($query, $connect );
   echo $query.';<br>';
   $i++;
}
fclose($csvfile);
echo "File data successfully imported to database!!";
mysql_close($connect); // closing connection
?>