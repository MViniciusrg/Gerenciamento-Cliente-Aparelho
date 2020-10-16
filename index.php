<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento Cliente/Aparelho</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include("header.php")
    ?>

    <div id="signBox">
        

        <div id="inputsClient" class="formBox">

        <img id="clientPic" src="assets/img/profile.jpg" alt="">
            <input type="text" name="name" id="name" placeholder="Cliente" class="inputClass">
            <input type="number" name="cpf" id="cpf" placeholder="CPF" class="inputClass">
            <input type="number" name="tel" id="tel" placeholder="Contato" class="inputClass">

            <input type="button" id="submitBtn" value="Enviar">
        </div>

        <div id="inputsDevice" class="formBox">

            <input type="text" name="model" id=",model" placeholder="Modelo" class="inputClass">
            <input type="text" name="brand" id="brand" placeholder="Marca" class="inputClass">
            <input type="text" name="description" id="description" placeholder="Descrição do defeito">

            <input type="button" id="submitBtn" value="Enviar">
        </div>

        
    </div>



    <!-- integração ao JS-->
    <script src="js/script.js"></script>

    <!--fontawesome (aplicação futura)-->
    <script src="assets/fontawesome/all.min.js"></script>

</body>
</html>