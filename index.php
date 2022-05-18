<?php echo "ok"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Descrição-->
    <meta name="author" content="Geovane cordeiro dos santos">
    <meta name="description" content="Convite mostra meu desempenho e dedicação.">
    
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="bolofofos_icone.png">
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="pageBryan.css">
    
    <!--Titulo-->
    <title>Convite de aniversário do BRYAN</title>
  </head>
  <body style="padding: 20px;">
    <header>
      <section class="sec-nome-bolo">
        <img src="/bolofofos2.png" style="width: 400px; margin-top: 20px;" alt="Imagem nome bolofofos">
      </section>
    </header>
    
    <main class="main-bryan">
      <div class="div-bryan">
      <section>
        <h1 style="color: var(--texto_principais);">Você está convidado para meu Aniversário !</h1>
        <h3 style="font-size: 20px; color: var(--texto_segundarios);">Aqui você encontrará todas as informações a respeito da minha festinha.</h3>
          <i style="font-size: 16px; color: var(--texto_principais);">Conto com sua presença, em caso de não comparecimento favor informar para meus pais.</i><br>
          <p style="font-size: 40px; color: var(--texto_principais); text-decoration: underline 3px var(--marron);">BRYAN FAZ <i style="font-size: 70px; color: blue;">1</i> ANO !</p>

      </section>
      <div class="div-bryan1">
      <section style="margin-top: 70px;">
        <img class="bb" src="/bolofofos1.png" style="width: 230px;" alt="Imagem figuras bolofofos">
      </section>
      <section>
        <img class="yy" src="/bryanFoto.png" style="width: 240px;" alt="Imagem de bryan">
      </section>
      </div>
      <div classe="div-mapa">
        <h2 style="color: var(--texto_principais);"> Local da minha festinha.</h2>
        <h4 style="margin-bottom: 20px; color: var(--texto_segundarios);">A comemoração do meu primeiro aninho <br>está previsto para começar ás  <br><i style="color: red; font-size:40px;">17hr</i> do dia <i style="color: red; font-size:40px;">27/05</i>.</h4>
      <iframe style="position: relative; margin: 0 auto 0 auto; border: solid 2px aqua;border-radius: 20px;" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d479.54321528876113!2d-34.96669930630242!3d-8.22695287866555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m0!4m3!3m2!1d-8.2269443!2d-34.96676!5e0!3m2!1spt-BR!2sbr!4v1652719398975!5m2!1spt-BR!2sbr" width="400" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    </main>
    
<footer>
<section class="sec-nome-boloo">
        <img src="/bolofofos2.png" style="width: 400px; margin: 20px 0 20px 0;" alt="Imagem nome bolofofos">
      </section>
</footer>
  </body>
</html>
<style>
   .bb {
  animation-name: fundo2;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}

@keyframes fundo2 {
  0% {
    transform: translateY(-20px);
  }
  50% {
    transform: translateY(0px);
  }
  100% {
    transform: translateY(-20px);
  }
}
.yy {
  animation-name: fundo3;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}

@keyframes fundo3 {
  100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
  0% {
    transform: translateY(00px);
  }
}
  .main-bryna{
    
  }
  .div-bryan{

  }
  .div-bryan1{
    justify-content: center;
    gap: 20px;
    margin: 20px 0 5px 0;
    display: flex;
  }
 .sec-nome-bolo {
  animation-name: fundo0;
  animation-duration: 2s;
  animation-iteration-count: inherit;
}

@keyframes fundo0 {
  0% {
    transform: translateY(-120px);
  }
  100% {
    transform: translateY(0px);
  }
}
.sec-nome-boloo {
  animation-name: fundo1;
  animation-duration: 3s;
  animation-iteration-count: inherit;
}

@keyframes fundo1 {
  0% {
    transform: translateX(-220px);
  }
  100% {
    transform: translateX(0px);
  }
}
</style>
