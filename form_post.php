<?php
$dados = $_POST['nome'];
$file=$_FILES['file'];

$caminho = $_FILES['file']['tmp_name'];
$img_content = file_get_contents($caminho);
file_put_contents('avatar.jpg', $img_content);

header('Location: /aula21/form.php');
?>