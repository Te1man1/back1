<html>
  <head>
   <!-- bootstrap 4 js -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script> 
    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">  
  <style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
.error {
  border: 2px double red;
  background: #fc3;
  padding: 5px; 
  width: 50%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left:100px
}
    </style>
  </head>
  <body>

<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

// Далее выводим форму отмечая элементы с ошибками классом error
// и задавая начальные значения элементов ранее сохраненными.
?>
 <div class="container">
    <form class="col-md-6 col-xs-12 col-sm-6" action="" method="POST">
      <div> <p> Имя: <input id="firstname" name="fio" <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>" /></p></div>
      <p> Email: <input name="email" type="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" ></p>
      <p> Дата рождения: <input name="birth_date" type="date" <?php if ($errors['birth_date']) {print 'class="error"';} ?> value="<?php print $values['birth_date']; ?>"></p>
      <p> Пол:</p>
      <p><input type="radio" name="gender" value="male"> Мужской</p>
      <p><input type="radio" name="gender" value="female"> Женский</p>
      <p> Количество конечностей</p>
      <p><input type="radio" name="number_of_limbs" value="1"> 1 </p>
      <p><input type="radio" name="number_of_limbs" value="2"> 2 </p>
      <p><input type="radio" name="number_of_limbs" value="3"> 3 </p>
      <p> Сверхспособности: </p>
      <select name="ability">
          <option>бессмертие</option>
          <option>прохождение сквозь стены</option>
          <option>левитация</option>
      </select>
      <p> Биография</p>
      <p><textarea name="comment"></textarea></p>
      <input type="submit" value="Отправить" />
    </form>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <script>
        
    </script>
  </body>
</html>