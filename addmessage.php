<?php
try{
    $conn = new PDO(:"mysql:host=localhost;dbname=ScootSchollKub", 'root', 'root');

    if (empty($_POST['name'])) exit("Поле не заполнено!");
    if (empty($_POST['content'])) exit("Поле не заполнено!");

    $query = "INSERT INTO message VALUES (NULL , :name, NOW())";
    $msg = conn->prepare($query);
    $msg->execute(['name' => $_POST ['name']]);

    $msg_id = $conn->lastInsertId();

    $query = "INSERT INTO message content (NULL , :content, :message_id)";
    $msg = conn->prepare($query);
    $msg->execute(['name' => $_POST ['content'], 'message_id' => $msg_id]);

    header( sring:"Location: index.html");
    catch (PDOException $e)
    {
        echo "error" .$e->getMassage();
    }
}
?>