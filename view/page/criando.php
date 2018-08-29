<?php if(isset($template)){?>
<div class="newcomunidade">
<h1 style="color: #476323 !important; font-size: 1.4em;">Criando uma comunidade!!</h1>
<p style="color: #476323 !important; font-size: 1.1em;">Crie uma comunidade do seu jogo/filme/série/banda/anime favorito.</p>

<hr>

<p style="color: #476323 !important;">Qual vai ser o nome da página?</p>
<input type="" id="nome" name="" placeholder="Exemplo: Sociedade Harry Potter">
<hr>
<p style="color: #476323 !important;">Sobre oque é essa comunidade?</p>
<input type="" id="sobre" name="" placeholder="Exemplo: Fans de Harry Potter">
<hr>
<button>Criar comunidade</button>

</div>


 <?php } else{ include '../404/index.php';}?>