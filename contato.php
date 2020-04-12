<?php include ("header.php"); ?>
<link rel="stylesheet" type="text/css" href="CSS/contato.css">
<div class="main">
    <div style="margin-top: 2%">
        <p>Encaminhe suas dúvidas e solicitações de consultas pelo formulário.</p>
        <img src="imagens/contato_icon.svg" alt="contato_icon" class="contato-icon">
        <div id='area'>
            <form id='formulario' autocomplete='off'>
                <div class="grid-area">
                    <label>Nome:</label>
                    <input class='campo_nome' type='text'>
                    <label>Email:</label>
                    <input class='campo_email'type='text'>
                    <label>Mensagem:</label>
                    <textarea class='msg' cols='35' rows='8'></textarea>
                    <input class='btn_submit' type='submit' value='Enviar'>
                </div>
            </form>     
        </div>
    </div>
</div>
<?php include("footer.php");?>
