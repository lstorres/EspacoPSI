<?php include ("header.php"); ?>
<?php 
    if(isset($_GET['emailSended'])){
       $emailSended = $_GET['emailSended'];
    }else{
        $emailSended ="";
    }

?>

<link rel="stylesheet" type="text/css" href="CSS/contato.css">
<div class="main">
        <div style="margin-top: 2%">
            <?php if($emailSended=='true'){
            echo "<p class='success'>Mensagem enviada com sucesso.</p>";
        }else{
            if($emailSended=='false'){
                echo "<p class='error'>Mensagem não enviada, favor entrar em contato pelo e-mail <i>epsitijuca@gmail.com</i>.</p>";
            }
        }?>
        <p>Encaminhe suas dúvidas e solicitações de consultas pelo formulário.</p>
        <img src="imagens/contato_icon.svg" alt="contato_icon" class="contato-icon">
        <div id='area'>
            <form id='formulario' action="sendEmail.php" method='POST' autocomplete='off'>
                <div class="grid-area">
                    <label>Nome:</label>
                    <input class='campo_nome' name="name" type='text'>
                    <label>Email:</label>
                    <input class='campo_email'name="email" type='text'>
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone">
                    <label>Mensagem:</label>
                    <textarea class='msg' name="message" cols='35' rows='8'></textarea>
                    <input class='btn_submit' type='submit' value='Enviar'>
                </div>
            </form>     
        </div>
    </div>
</div>
<?php include("footer.php");?>
