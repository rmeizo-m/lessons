http://code.mu/books/php/
________________________________________________________________________________
Работа с if-else
 Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
 Проверьте работу скрипта при $a, равном 1, 0, -3.
________________________________________________________________________________
<?php
$a = 3;
if ($a = 0) {
  echo $a;
} else {echo "Неверно";}
echo "\n";
?>
________________________________________________________________________________
 Если переменная $a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'.
 Проверьте работу скрипта при $a, равном 1, 0, -3.
________________________________________________________________________________
<?php
$a = 2;
if ($a > 0) {
  echo "Verno";
} else{
  echo "Neverno";
}
echo "\n";
 ?>
________________________________________________________________________________
 Если переменная $a меньше нуля, то выведите 'Верно', иначе выведите 'Неверно'.
 Проверьте работу скрипта при $a, равном 1, 0, -3.
________________________________________________________________________________
<?php
$a = 2;
if ($a < 0) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
 Если переменная $a больше или равна нулю, то выведите 'Верно', иначе выведите
 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
________________________________________________________________________________
<?php
$a = 2;
if ($a >= 0) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
 Если переменная $a меньше или равна нулю, то выведите 'Верно', иначе выведите
 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
________________________________________________________________________________
<?php
$a = 2;
if ($a <= 0) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
 Если переменная $a не равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
 Проверьте работу скрипта при $a, равном 1, 0, -3.
________________________________________________________________________________
<?php
$a = 2;
if ($a != 0) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
 Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'.
 Проверьте работу скрипта при $a, равном 'test', 'тест', 3.
________________________________________________________________________________
<?php
$a = 1;
$test = 5;
if ($a == $test) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
 ?>
________________________________________________________________________________
 Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно',
 иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном '1', 1, 3.
________________________________________________________________________________
<?php
$a = '1';

if ($a === '1'){
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";


$a = '1';

if ($a === 1){
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = '1';

if ($a === 3){
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

?>
________________________________________________________________________________
Работа с empty и isset
 Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
 Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
________________________________________________________________________________
<?php
$a = 1;
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = 3;
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = -3;
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = 0;
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = null;
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = true;
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = '';
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";

$a = '0';
if (empty($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'.
________________________________________________________________________________

<?php
$a = 2;
if (!empty($a)){
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
 ?>
________________________________________________________________________________
Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 3 и null.
________________________________________________________________________________
<?php
$a = 3;
if (isset($a)) {
  echo "Verno";
}else{
  echo "Neverno";
}
echo "\n";
 ?>

________________________________________________________________________________
 Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'.
________________________________________________________________________________
<?php
$a = null;
if (!isset($a)){
  echo "Verno";
  }else{
  echo "Neverno";
  }
  echo "\n";
?>
________________________________________________________________________________
Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $var, равном true, false. Напишите два варианта
скрипта - с короткой записью и с длинной.
________________________________________________________________________________
<?php
$var = true;
if ($var == true) {
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
 Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'.
 Проверьте работу скрипта при $var, равном true, false.
 Напишите два варианта скрипта - с короткой записью и с длинной.
________________________________________________________________________________
<?php
$var = true;
if ($var != true) {
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";

$var = false;
if ($var != true) {
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
Работа с OR и AND
 Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе
 выведите 'Неверно'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
________________________________________________________________________________
<?php
$a = 5;
if ($a > 0 AND $a < 5){
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";

$a = 0;
if ($a > 0 AND $a < 5){
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";


$a = 3;
if ($a > 0 AND $a < 5){
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";

$a = 2;
if ($a > 0 AND $a < 5){
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";
?>
________________________________________________________________________________
Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе
поделите ее на 10. Выведите новое значение переменной на экран. Проверьте
работу скрипта при $a, равном 5, 0, -3, 2.
________________________________________________________________________________
<?php
$a =5;
if ($a == 0 or $a == 2){
  $a+=7;
}else{
  $a /= 10;
}
echo $a;

$a = 0;
if ($a == 0 or $a == 2){
  $a+=7;
}else{
  $a /= 10;
}
echo $a;

$a = -3;
if ($a == 0 or $a == 2){
  $a+=7;
}else{
  $a /= 10;
}
echo $a;

$a = 2;
if ($a == 0 or $a == 2){
  $a+=7;
}else{
  $a /= 10;
}
echo $a;
?>
________________________________________________________________________________
Если переменная $a равна или меньше 1, а переменная $b больше или равна 3,
то выведите сумму этих переменных, иначе выведите их разность (результат вычитания).
Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.
________________________________________________________________________________
<?php
$a = 1;
$b = 3;
if ($a <= 1 and $b <= 3) {
  echo $a + $b;
} else {
  echo $a - $b;
}

$a = 0;
$b = 6;
if ($a <= 1 and $b <= 3) {
  echo $a + $b;
} else {
  echo $a - $b;
}

$a = 3;
$b = 5;
if ($a <= 1 and $b <= 3) {
  echo $a + $b;
} else {
  echo $a - $b;
}
 ?>
________________________________________________________________________________
Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна
6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите 'Неверно'.
________________________________________________________________________________
<?php
$a = 5;
$b = 7;
if ($a > 2 and $a < 11 or $b >= 6 and $b < 11 ) {
  echo "Verno";
}
else {
    echo "Neverno";
}
echo "\n";
 ?>
________________________________________________________________________________
На switch-case
 Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет
 значение '1', то в переменную $result запишем 'зима', если имеет значение '2' –
 'лето' и так далее. Решите задачу через switch-case.
________________________________________________________________________________
<?php
$num = 2;

switch($num){
  case 1:
  $result = 'зима';
  break;
  case 2:
  $result = 'лето';
  break;
  case 3:
  $result = 'весна';
  break;
  case 4:
  $result = 'осень';
  break;
  defined:
  $result = 'Значения нет';
  break;
}
echo $result;
echo "\n";
?>
________________________________________________________________________________
В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в
какую декаду месяца попадает это число (в первую, вторую или третью).
________________________________________________________________________________
<?php
$day = 1;
if ($day > 0 and $day <= 10) {
  echo $day.' '."Первая декада";
}
if ($day > 10 and $day <= 20) {
  echo $day.' '."Вторая декада";
}
echo "\n";
?>
________________________________________________________________________________
 В переменной $month лежит какое-то число из интервала от 1 до 12. Определите
 в какую пору года попадает этот месяц (зима, лето, весна, осень).
________________________________________________________________________________
<?php
$month = 2;
if ($month == 12 || $month == 1 || $month == 2) {
  echo "Зима";
}

if ($month == 3 || $month == 4 || $month == 5) {
  echo "Весна";
}
if ($month == 6 || $month == 7 || $month == 8) {
  echo "Лето";
}
if ($month == 9 || $month == 10 || $month == 11) {
  echo "Осень";
}
echo "\n";
?>
________________________________________________________________________________
В переменной $year хранится год. Определите, является ли он високосным
(в таком году есть 29 февраля). Год будет високосным в двух случаях: либо он
делится на 4, но при этом не делится на 100, либо делится на 400. Так, годы
1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не
делятся на 400. Годы 1600 и 2000 - високосные, так как они делятся на 400.
________________________________________________________________________________
<?php
$years = 1700;
if ($years % 4 == 0 && $years % 100 != 0 || $years % 400 == 0 ){
  echo "Високосный";
} else {
  echo "Не Високосный";
}
?>
________________________________________________________________________________
Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой
строки является буква 'a'. Если это так - выведите 'да', в противном случае
выведите 'нет'.
________________________________________________________________________________
<?php
$str = 'bcde';
if ($str[0] == 'a') {
  echo 'yes';
} else{
  echo 'no';
}
?>
________________________________________________________________________________
 Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой
 строки является цифра 1, 2 или 3. Если это так - выведите 'да', в противном
 случае выведите 'нет'.
________________________________________________________________________________
<?php
$str = '72345';
if ($str[0] == 1 || $str[0] == 2 || $str[0] == 3) {
  echo 'yes';
}else{echo 'no';}
 ?>
________________________________________________________________________________
 Дана строка из 3-х цифр. Найдите сумму этих цифр. То есть сложите как числа
 первый символ строки, второй и третий.
________________________________________________________________________________
<?php
$str = '123';
echo $str[0] + $str[1] +$str[2];
?>
________________________________________________________________________________
 Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме
 вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'
________________________________________________________________________________
<?php
$str = '123521';
$res1 = $str[0] + $str[1] + $str[2];
$res2 = $str[3] + $str[4] + $str[5];
if ($res1 == $res2){
  echo "да";
} else {
  echo "нет";
}
?>
________________________________________________________________________________
