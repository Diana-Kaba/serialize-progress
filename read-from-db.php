<?php
$db = "db.txt";
$f = fopen($db, "r") or die("Помилка!");

$content = fread($f, filesize($db));
$fullContent = unserialize($content);
?>

<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Серіалізація</title>
    <style>
      body {
        font-family: "Courier New", Courier, monospace;
        background-color: bisque;
      }

      table,
      tr,
      th,
      td {
        border: 1px solid #000;
        padding: 20px;
        background-color: #fff;
      }

      table {
        border-collapse: collapse;
        margin: 0 auto;
      }
    </style>
  </head>

<body>

  <table>
      <caption>
        <h2>Успішність</h2>
      </caption>
      <thead>
        <tr>
          <th colspan="5">Група <u>ОПК-222</u></th>
        </tr>
        <tr>
          <th>Студент</th>
          <th>Дисципліна</th>
          <th>Оцінка</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($fullContent as $value) {
              echo "        <tr>
              <td>{$value[0]}</td>
              <td><i>{$value[1]}</i></td>
              <td>{$value[2]}</td>
            </tr>";
        }
        ?>
    </tbody>
  </table>
</body>
</html>