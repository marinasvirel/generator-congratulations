<?php

$congratulations = ["счастья", "здоровья", "удачи", "любви", "восторгов"];

function random($arr)
{
  $arr2 = [];
  $rand_keys = array_rand($arr, 3);
  foreach ($rand_keys as $value) {
    $arr2[] = $arr[$value];
  }
  return implode(', ', $arr2);
}

if ($_POST) {
  $str = random($congratulations);
  echo "{$_POST['gender']} {$_POST['name']}, поздравляю {$_POST['holidays']}! <br> Желаю {$str}! ";
}
?>

<form action="" method="post">
  <input type="text" name="name" placeholder="Имя" required>
  <label for="man">Мужской</label>
  <input type="radio" name="gender" id="man" value="Дорогой" checked>
  <label for="woman">Женский</label>
  <input type="radio" name="gender" id="woman" value="Дорогая">
  <select name="holidays">
    <option value="с Днем рождения" selected>День рождения</option>
    <option value="с Новым годом">Новый год</option>
    <option value="с Первым днем весны">Первым день весны</option>
  </select>
  <input type="submit">
</form>