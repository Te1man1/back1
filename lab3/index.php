<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['birth_date']) && isset($_POST['gender']) && isset($_POST['number_of_limbs']) && isset($_POST['ability'])){
        // Переменные с формы
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['birth_date'];
        $ability = $_POST['ability'];
        $gender = $_POST['gender'];
        $number_of_limbs = $_POST['number_of_limbs'];
        
        // Параметры для подключения
        $db_host = "localhost";
        $db_user = "u47651"; // Логин БД
        $db_password = "5455315"; // Пароль БД
        $db_base = 'u47651'; // Имя БД
        $db_table = "application"; // Имя Таблицы БД
        
        try {
            // Подключение к базе данных
            $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
            // Устанавливаем корректную кодировку
            $db->exec("set names utf8");
            // Собираем данные для запроса
            $data = array( 'name' => $name, 'email' => $email, 'birth_date' => $birth_date );
            // Подготавливаем SQL-запрос
            $query = $db->prepare("INSERT INTO $db_table (name, email, birth_date, gender) values (:name, :email, :birth_date, :gender )");
            // Выполняем запрос с данными
            $query->execute($data);
            // Запишим в переменую, что запрос отрабтал
            $result = true;
        } catch (PDOException $e) {
            // Если есть ошибка соединения или выполнения запроса, выводим её
            print "Ошибка!: " . $e->getMessage() . "<br/>";
        }
        
        if ($result) {
            echo "Успех. Информация занесена в базу данных";
        }
    }
?>