<?php
session_start();
echo 'I\'m alive!'. PHP_EOL;
echo ' Эту форму разработал ВЕЛИКИЙ мыслитель Илья'. PHP_EOL;


if  (!$_SESSION ['username'])
{  echo 'облом петрович' ;
   include '.\contact.php';
}
elseif ($_SESSION ['username']) {echo "привет   -" ;}
echo '<p> добавьте проверку, если внутри сессии существует не пустая переменная с именем пользователя,
 то просто поприветствуйте пользователя, не отображая форму и разместите ссылку на скрипт exit.php.
  Иначе отобразите форму как было раньше.';
