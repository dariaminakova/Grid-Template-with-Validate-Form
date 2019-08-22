<?php
   $name = trim($_POST['name']);
   $phone = trim($_POST['phone']);
   $email = trim($_POST['email']);
   $id_city = (int)($_POST['city']);
   $dt = date('Y-m-d H:i:s');

   if($name == '' || $phone == '' || $email == '' || $id_city == 0){
       echo 'Заполните все поля';
   }
   else{
       file_put_contents('apps.txt', "$dt $name $phone $email $id_city \n", FILE_APPEND);
       //mail ('admin@mail.com', 'Новая заявка', "$dt $name $phone $email $id_city",)
       echo '1';
   }