<!DOCTYPE html PUBLIC "–//W3C//DTD HTML 4.01//EN">
<html><head>
<meta http–equiv="Content–Type" content="text/html; charset=Windows–1251" /><title>Тест на PHP</title>
</head><body>
<h3>Тест на PHP</h3>
<?php
 $test = array (
  array ('q'=>'Первым космонавтом был Юрий Гагарин','t'=>'checkbox','a'=>'1'),
  array ('q'=>'Первым президентом РФ был Михаил Горбачёв','t'=>'checkbox','a'=>'0'),
  array ('q'=>'Сколько уровней прикладных протоколов в стандартной сетевой модели OSI?','t'=>'text','a'=>'7'),
  array ('q'=>'Жириновский возглавляет партию ','t'=>'select','i'=>'КПРФ|ЛДПР|ЕР','a'=>'1'),
  array ('q'=>'Выберите верные утверждения','t'=>'multiselect',
   'i'=>'2*2=4|Волга впадает в Каспийское море|Луна дальше от Земли, чем Солнце','a'=>'1|1|0')
 );
 if (!empty($_POST['action'])) { //считаем правильные и выводим резюме
  $ball = 0;
  foreach ($test as $key=>$val) {
   switch ($val['t']) {
    case 'checkbox':
     if (isset($_POST[$key]) and $val['a']==1 or !isset($_POST[$key]) and $val['a']==0) $ball++;
    break;
    case 'text':
     if (isset($_POST[$key]) and strlwr_($_POST[$key])==strlwr_($val['a'])) $ball++;
    break;
    case 'select':
     if (isset($_POST[$key]) and $_POST[$key]==$val['a']) $ball++;
    break;
    case 'multiselect':
     $i = explode ('|',$val['a']);
     $cnt = 0;
     foreach ($i as $number=>$answer)
      if (isset($_POST[$key.'_'.$number]) and $answer==1 or 
        !isset($_POST[$key.'_'.$number]) and $answer==0) $cnt++;
     if ($cnt==count($i)) $ball++;
    break;
   }
  }
  $p = round ($ball/count($test)*100);
  echo '<p>Верных ответов: '.$ball.' из '.count($test).', '.$p.'%.</p>';
  echo '<p><a href="'.$_SERVER['PHP_SELF'].'">Ещё раз!</a></p>';
 }
 else { //предложить форму
  echo '<p>Отметьте верные утверждения или введите ответ или выберите верный вариант из списка.</p>';
  $counter = 1;
  echo '<form method="post">';
  foreach ($test as $key=>$val) {
   error_check ($val);
   echo ($counter++).'. ';
   switch ($val['t']) {
    case 'checkbox':
     echo $val['q'].' <input type="checkbox" name="'.$key.'" value="1">';
    break;
    case 'text':
     $len = strlen ($val['a']);
     echo $val['q'].' <input type="text" name="'.$key.'" value="" maxlength="'.$len.'" size="'.($len+1).'">'; 
    break;
    case 'select':
     echo $val['q'].' <select name="'.$key.'" size="1">';
     $i = explode ('|',$val['i']);
     foreach ($i as $number=>$item) echo '<option value="'.$number.'">'.$item;
     echo '</select>';
    break;
    case 'multiselect':
     $i = explode ('|',$val['i']);	 
     echo $val['q'].':&nbsp;&nbsp;&nbsp;';
     foreach ($i as $number=>$item)
      echo $item.' <input type="checkbox" name="'.$key.'_'.$number.'" value="1">&nbsp;&nbsp;&nbsp;';
    break;
   }
   echo '<br>';
  }
  echo '<input type="submit" name="action" value="Ответить"></form>';
 }

 function error_check ($q) {
  $question_types = array ('checkbox', 'text', 'select', 'multiselect');
  $error = '';
  if (!isset($q['q']) or empty($q['q'])) $error='Нет текста вопроса или он пуст';
  else if (!isset($q['t']) or empty($q['t'])) $error='Не указан или пуст тип вопроса';
  else if (!in_array($q['t'],$question_types)) $error='Указан неверный тип вопроса';
  else if (!isset($q['a']) or empty($q['a']) and $q['a']!='0') $error='Нет текста ответа или он пуст';
  else {
   if ($q['t']=='checkbox' and !($q['a']=='0' or $q['a']=='1')) 
    $error = 'Для переключателя разрешены ответы 0 или 1';
   else if ($q['t']=='select' || $q['t']=='multiselect') {
    if (!isset($q['i']) or empty($q['i'])) $error='Не указаны элементы списка';
    else {
     $i = explode ('|',$q['i']);
     if (count($i)<2) $error='Нет хотя бы 2 элементов списка вариантов ответа с разделителем |';
     foreach ($i as $s) if (strlen($s)<1) { $error = 'Вариант ответа короче 1 символа'; break; }
     else {
      if ($q['t']=='select' and !array_key_exists($q['a'],$i)) $error='Ответ не является номером элемента списка';
      if ($q['t']=='multiselect' ) {
       $a = explode ('|',$q['a']);
       if (count($i)!=count($a)) $error='Число утверждений и ответов не совпадает';
       foreach ($a as $s) if ($s!='0' and $s!='1') { 
        $error = 'Утверждение не отмечено как верное или неверное'; break; 
       }
      }
     }
    }
   }
  }
  if (!empty($error)) {
   echo '<p>Найдена ошибка теста: '.$error.'</p><p>Отладочная информация:</p>';
   print_r ($q);
   exit;
  }
 }
 
 function strlwr_($s){
  $hi = "ABCDEFGHIJKLMNOPQRSTUVWXYZАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
  $lo = "abcdefghijklmnopqrstuvwxyzабвгдеёжзийклмнопрстуфхцчшщъыьэюя";
  $len = strlen ($s);
  $d='';
  for ($i=0; $i<$len; $i++) {
   $c = substr($s,$i,1);
   $n = strpos($c,$hi); 
   if ($n!==FALSE) $c = substr ($lo,$n,1);
   $d .= $c;
  }
  return $d;
 }
?>
</body></html>