<!doctype html>
<html lang="pt-br">

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<meta name="keywords" content="coworking, colaborativo, Porto Alegre, Centro Histórico, microempresas, empreendedorismo, espaço de trabalho">
<meta name="description" content="A Fábrica de Ideias é um espaço de coworking localizado no centro de Porto Alegre.">
<title>Fábrica de Ideias</title>
<link rel="shortcut icon" href="./static/img/fabricalogo.png">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="./static/css/fabrica.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body class="full nebula">
  <nav id="navigation" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="./static/svg/fabricalogo.svg" style="display:inline; height:1.5em; align:middle;"/>
    </a>
    <form class="form-inline ml-auto">
      <a class="btn btn-outline-success" href="https://m.me/fabricaideiasco" target="_blank" role="button">Conversar</a>
    </form>
  </nav>
  <div class="container">
    <div class="row my-0 my-sm-5">
      <div class="col-md-6 pr-3 pr-md-5">
        <div class="py-3">
          <h2 style="font-size:2em; line-height:1.2em; padding-top:0em; padding-bottom:1em; text-align: left">
            O ambiente coletivo ideal para trabalho, aprendizagem e inovação.
          </h2>
          <p style="font-size:1em; line-height: 2em;">Converse com a gente por
            <a href="mailto:ola@fabricaideias.co">ola@fabricaideias.co</a>
            e marque uma visita durante a semana. Vamos recebê-lo com um bom café, chá ou chimarrão.
            Temos aqui um bom atendimento e opções de cursos, oficinas e eventos durante todo ano.</p>
        </div>
        <form class="py-3 my-2">
          <div class="form-group py-3">
            <label class="question" for="customRadio"><strong>Para quantas pessoas você precisa?</strong></label><br>
            <div class="custom-control custom-radio custom-control-inline">
              <input class="custom-control-input" type="radio" name="customRadio" onchange="show()" value="10" id="customRadio1" selected>
              <label class="custom-control-label" for="customRadio1"> Cadeira (1 Pessoa) </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input class="custom-control-input" type="radio" name="customRadio" onchange="show()" value="20" id="customRadio2">
              <label class="custom-control-label" for="customRadio2"> Mesa (5 Pessoas) </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input class="custom-control-input" type="radio" name="customRadio" onchange="show()" value="40" id="customRadio3">
              <label class="custom-control-label" for="customRadio3"> Sala (10 Pessoas)</label>
            </div>
          </div>
          <div class="form-group py-3">
            <label class="question" for="customRange1"><strong>Quantas horas você precisa usar?</strong></label>
            <input onchange="show()" class="custom-range" type="range" min="1" max="160" start="1" id="customRange1">
            <div class="d-flex justify-content-between py-3">
              <p style="display:inline; font-size:2em">
                <label id="hours">1</label>
                <label id="hourstring">Hora</label>
              </p>
              <p style="display:inline; font-weight:bold; font-size:2em">
                <label>R$</label>
                <label id="price">10,00</label>
              </p>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6 pl-0 pl-md-5">
        <div class="row">
          <div class="col-6 offset-md-6 col-md-3 p-0">
            <a class="thumbnail" href="./static/media/coworking1.jpeg">
              <img class="img-fluid" src="./static/media/cwk1_sm.jpeg">
            </a>
          </div>
          <div class="col-6 col-md-3 p-0">
            <a class="thumbnail" href="./static/media/coworking2.jpeg">
              <img class="img-fluid" src="./static/media/cwk2_sm.jpeg">
            </a>
          </div>
          <div class="col-6 offset-md-3 col-md-6 p-0">
            <a class="thumbnail" href="./static/media/coworking8.jpeg">
              <img class="img-fluid" src="./static/media/cwk8_sm.jpeg">
            </a>
          </div>
          <div class="col-6 col-md-3 p-0 d-none d-md-block">
            <a class="thumbnail" href="./static/media/coworking4.jpeg">
              <img class="img-fluid" src="./static/media/cwk4_sm.jpeg">
            </a>
            <a class="thumbnail" href="./static/media/coworking5.jpeg">
              <img class="img-fluid" src="./static/media/cwk5_sm.jpeg">
            </a>
          </div>
          <div class="col-6 col-md-9 p-0">
            <a class="thumbnail" href="./static/media/coworking11.jpeg">
              <img class="img-fluid" src="./static/media/cwk11_sm.jpeg">
            </a>
          </div>
          <div class="col-6 col-md-3 p-0 d-none d-md-block">
            <a class="thumbnail" href="./static/media/coworking7.jpeg">
              <img class="img-fluid" src="./static/media/cwk7_sm.jpeg">
            </a>
            <a class="thumbnail" href="./static/media/coworking3.jpeg">
              <img class="img-fluid" src="./static/media/cwk3_sm.jpeg">
            </a>
            <a class="thumbnail" href="./static/media/coworking9.jpeg">
              <img class="img-fluid" src="./static/media/cwk9_sm.jpeg">
            </a>
          </div>
          <div class="col-6 col-md-3 p-0">
            <a class="thumbnail" href="./static/media/coworking10.jpeg">
              <img class="img-fluid" src="./static/media/cwk10_sm.jpeg">
            </a>
          </div>
          <div class="col-6 col-md-3 p-0">
            <a class="thumbnail" href="./static/media/coworking6.jpeg">
              <img class="img-fluid" src="./static/media/cwk6_sm.jpeg">
            </a>
          </div>
          <div class="col-6 col-md-3 p-0">
            <a class="thumbnail" href="./static/media/coworking12.jpeg">
              <img class="img-fluid" src="./static/media/cwk12_sm.jpeg">
            </a>
          </div>
          <div class="col-6 d-block d-md-none p-0">
            <a class="thumbnail" href="./static/media/coworking7.jpeg">
              <img class="img-fluid" src="./static/media/cwk7_sm.jpeg">
            </a>
          </div>
          <div class="col-6 d-block d-md-none p-0">
            <a class="thumbnail" href="./static/media/coworking3.jpeg">
              <img class="img-fluid" src="./static/media/cwk3_sm.jpeg">
            </a>
          </div>
          <div class="col-6 d-block d-md-none p-0">
            <a class="thumbnail" href="./static/media/coworking9.jpeg">
              <img class="img-fluid" src="./static/media/cwk9_sm.jpeg">
            </a>
          </div>
          <div class="col-6 d-block d-md-none p-0">
            <a class="thumbnail" href="./static/media/coworking4.jpeg">
              <img class="img-fluid" src="./static/media/cwk4_sm.jpeg">
            </a>
          </div>
          <div class="col-6 d-block d-md-none p-0">
            <a class="thumbnail" href="./static/media/coworking5.jpeg">
              <img class="img-fluid" src="./static/media/cwk5_sm.jpeg">
            </a>
            </div>
          </div>
      </div>
    </div>
  </div>


<div class="container-fluid">
  <div class="row text-center text-white">
    <div id="learn" class="col-md-6">
      <img src="./static/svg/learning.svg" class="pt-3 img-fluid center-block" style="width:50%; max-height:480px; margin:0 auto;"/>
      <div class="py-5 px-sm-5">
        <h2>Aprenda</h2>
        <p class="px-sm-5">Desenvolva novas habilidades com uma pletora de cursos, oficinas e atividades diferenciadas que a Fábrica de Ideias realiza durante o ano todo. Confira em nossa fan page nossos próximos eventos.</p>
        <a class="btn btn-outline-info" href="https://facebook.com/fabricaideiasco/events" target="_blank" role="button">Descubra</a>
      </div>
    </div>
    <div id="labs"  class="col-md-6">
      <img src="./static/svg/labs.svg" class="pt-3 img-fluid center-block" style="width:50%; max-height:480px; margin:0 auto;"/>
      <div class="py-5 px-sm-5">
        <h2>Inove</h2>
        <p class="px-sm-5">Traga a tua ideia com a gente em um ambiente coletivo e frutífero para o empreendedorismo. Oferecemos todo o apoio em programação, design e o que precisar para que o teu negócio decole.</p>
        <a class="btn btn-outline-info" href="mailto:labs@fabricaideias.co" target="_blank" role="button">Contate</a>
      </div>
    </div>
  </div>
</div>

<div class="container py-0 py-sm-5">

<div class="row text-center">
  <h2 class="pt-3 m-0" style="width:100%;">Nossos Benefícios</h2>
</div>

<div class="row text-center" style="padding-top:1.5%; padding-bottom:1.5%">

  <div class="col-md-4">
    <div href="#" class="card my-2" style="min-height:425px">
      <img class="benefit card-img-top p-5" width="250" height="250" src="./static/svg/benefits_horario.svg"/>
      <div class="card-body">
        <h3 class="card-title">Toda hora</h3>
        <p class="card-text">Somos o primeiro espaço coletivo do RS disponível por
        24 horas o dia, 7 dias a semana, para qualquer tipo de atividade.
        </p>
      </div>
		</div>
	</div>
	<div class="col-md-4">
    <div href="#" class="card my-2" style="min-height:425px">
      <img class="benefit card-img-top p-5" width="250" height="250" src="./static/svg/benefits_valor.svg"/>
	    <div class="card-body">
        <h3 class="card-title">Flexível</h3>
	      <p class="card-text">Temos uma das melhores relações custo-benefício do
        mercado. Compare e contrate um de nossos planos ou pacotes de horas.</p>
      </div>
		</div>
	</div>
	<div class="col-md-4">
    <div href="#" class="card my-2" style="min-height:425px">
      <img class="benefit card-img-top p-5" width="250" height="250" src="./static/svg/benefits_local.svg"/>
	    <div class="card-body">
        <h3 class="card-title">Bem Localizado</h3>
  	    <p class="card-text">Estamos no Centro Histórico, no coração de POA,
        fácil de acessar por diversos meios e de receber clientes.
        </p>
      </div>
		</div>
	</div>
</div>

<div class="row text-center">
  <div class="offset-md-1 col-md-10 px-0 px-sm-5">
    <h3>Entenda o Coworking</h3>
    <p style="font-size: 1em; line-height: 2em;">No Coworking, profissionais
      de diversas &aacute;reas, microempresas, empreendedores
      individuais, ou qualquer pessoa que se identifique com a ideia de trabalhar
      em um ambiente criativo, passa a compartilhar o mesmo escrit&oacute;rio e se
      beneficiar com o uso comum da infraestrutura, diminuindo seus custos.
    </p>
  </div>
</div>

</div>

<div class="container-fluid py-5" style="background:black;">
  <div class="row text-white">
    <div class="offset-md-1 col-md-10 text-center">
      <h2>Que tal ter conforto na hora de trabalhar?</h2>
      <p>Temos uma comunidade ativa, onde você faz networking com empreendedores e profissionais, e ainda trabalha em um ambiente
      inspirador, criativo e colaborativo, muito bom para a criação de novos negócios. Interessou pelo assunto? Inscreva-se em nossa newsletter para saber mais.</p>
      <form action="https://fabricaideias.us7.list-manage.com/subscribe/post?u=47d68fd2fa2b8f4d9dec8468a&amp;id=00c68a3b8f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="input-group input-group-lg px-sm-5 my-3">
          <input id="mce-EMAIL" type="email" value="" name="EMAIL" class="required email form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"/>
        </div>
	      <div id="mce-responses" class="clear">
		      <div class="response" id="mce-error-response" style="display:none"></div>
		      <div class="response" id="mce-success-response" style="display:none"></div>
	      </div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true">
          <input type="text" name="b_47d68fd2fa2b8f4d9dec8468a_00c68a3b8f" tabindex="-1" value="">
        </div>
        <div class="clear pt-3">
          <input type="submit" value="Inscrever" name="subscribe" class="btn btn-outline-light btn-lg">
        </div>
      </form>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {
        window.fnames = new Array();
        window.ftypes = new Array();
        fnames[0]='EMAIL';
        ftypes[0]='email';
        fnames[1]='FNAME';
        ftypes[1]='text';
        fnames[2]='LNAME';
        ftypes[2]='text';
        fnames[3]='ADDRESS';
        ftypes[3]='address';
        fnames[4]='PHONE';
        ftypes[4]='phone';
        fnames[5]='BIRTHDAY';
        ftypes[5]='birthday';
      }(jQuery));
      var $mcj = jQuery.noConflict(true);
    </script>
  </div>
</div>

<footer class="footer">
 <div class="container pt-5">
   <div class="row">
     <div style="text-align: right;" class="col-md-6">
       <h2>Onde ficamos?</h2>
       <p>Ficamos na Vigário José Inácio, bem ao centro de Porto Alegre.</p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.265632596902!2d-51.228004584624586!3d-30.029236237530434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197908b9cb15c3%3A0xed9eb2236630c3af!2sR.+Vig.+Jos%C3%A9+In%C3%A1cio%2C+399+-+Centro+Hist%C3%B3rico%2C+Porto+Alegre+-+RS%2C+90020-110%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1461595916470" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
     <div class="col-md-6">
       <h2>Fábrica de Ideias</h2>
       <p>
         O primeiro ambiente coletivo 24h do RS<br>
         Rua Vigário José Inácio, 399/702 - Porto Alegre - RS<br>
         <a style="text-decoration: none;" href="mailto:ola@fabricaideias.co">
           ola@fabricaideias.co
         </a><br>
         Telefone: (51) 3516-2367<br>
         Celular 1: (51) 99848-5888 (William)<br>
         Celular 2: (51) 99959-9355 (Aida)<br>
         Horário de funcionamento comercial:<br>
         Segunda a sexta-feira, das 9h às 12h, e das 13h às 18h<br>
       </p>
       <a href="https://www.facebook.com/Fabricadeideiascw?ref=ts&amp;fref=ts">
         <img src="./static/svg/facebook.svg" style="margin-left: 0em;" class="rounded-icon" height="48" width="48">
       </a>
       <a href="https://twitter.com/fabricaideiascw">
         <img src="./static/svg/twitter.svg" class="rounded-icon" height="48" width="48">
       </a>
       <!--<a href="https://pt.foursquare.com/v/f%C3%A1brica-de-ideias-coworking--escrit%C3%B3rio-compartilhado/507e0c1a64a41ea912010f7c">
         <img src="./static/svg/foursquare.svg" style="border-radius: 5px" class="rounded-icon" height="48" width="48">
       </a>!-->
       <a href="https://github.com/fabricadeideias">
         <img src="./static/svg/github.svg" class="rounded-icon" height="48" width="48">
       </a><br><br></b></b>
     </div>
   </div>
   <div class="row">
     <p style="width:100%" class="text-center">Orgulhosamente criado por <a href="http://efforia.io/">Efforia</a></p>
   </div>
 </div>
</footer>

<script>
function show() {
  var price = 0
  var hours = $('#customRange1').val();
  var radio = document.getElementsByName('customRadio');
  for(var i = 0, length = radio.length; i < length; i ++) {
    if(radio[i].checked) price = radio[i].value;
  }
  /*if(hours == 480) {
    price = price / 10;
  } else */if(hours >= 160) {
    price = price / 5;
  } else if(hours >= 80) {
    price = price / 3.33333;
  } else if(hours >= 40) {
    price = price / 2.5;
  } else if(hours >= 20) {
    price = price / 2;
  } else if(hours >= 8) {
    price = price / 1.6;
  } else if(hours >= 4) {
    price = price / 1.33333;
  }

  price = Math.round(price * 100) / 100;
  $('#hours').html(hours);
  if(hours == 1) $('#hourstring').html('Hora');
  if(hours > 1) $('#hourstring').html('Horas');
  $('#price').html(price * hours);
}
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', '{{ settings.GOOGLE_ANALYTICS_ID }}', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>
