<<html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <body background="https://www.bandab.com.br/wp-content/uploads/2018/01/medicina.jpg">


<title>GerenciamentoRisco</title>
</head>

<h1 class="display-4"><center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt5qo_5QMED4UmNnKWucgycJvpNrEuTaKaYmtX-q4PQ8oWuZT0OA"
         alt="some text" width=200 height=200></center></h1>
         <p font face="sans-seriff"><Center><h2><font color="red">Classificação De Risco</font></h2></center></p>

         <div class="container">
    <div class="row">
     <div class="col" style="background-color:red , blue; border: 1px solid #e6e6e6; ">
            <div class="col-md-12" >
                <b><i><font color="red" face="sans-seriff" size="6">Informação Paciente:</font></i></b> 

<p>
</p>
<p>
</p>

<p>
</p>
<p>
</p>
<form>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4"><strong><u><font color="red">Nome do Paciente:</font></strong></u></label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Informe o nome do Paciente">
    </div>
    <div class="form-group col-md-1">
      <label for="inputPassword4"><strong><u><font color="red">Idade</font></strong></u></label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Idade do Paciente">
    </div>
  </div>
   <div class="form-group">
    <label for="inputAddress"><strong><u><font color="red">Alergias</font></strong></u></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Descreva as alergias do Paciente">
  </div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEstado"><strong><u><font color="red">Sexo</font></strong></u></label>
      <select id="inputEstado" class="form-control">
        <option selected>Selecione</option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>
    </div>      
    <div class="form-group col-md-4">
      <label for="inputCity"><strong><u><font color="red">Frequência Cardiaca</font></strong></u></label>
      <input type="text" class="form-control" id="inputCity" placeholder="Descreva FC">
    </div>
        <div class="form-group col-md-4">
      <label for="inputCEP"><strong><u><font color="red">Frequência Respiratoria</font></strong></u></label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Descreva FR">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity"><strong><u><font color="red">Temperatura Cº</font></strong></u></label>      
      <input type="text" class="form-control" id="inputCity" placeholder="Descreva TAX">
    </div>
        <div class="form-group col-md-4">
      <label for="inputCEP"><strong><u><font color="red">Nível de Saturação</font></strong></u></label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Descreva SAT">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"><strong><u><font color="red">Digite Aqui um Breve Relato do Paciente:</font></strong></u> </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="Escreva Aqui resumidamente as Queixas do Paciente.">
    </textarea>
  </div>
  </form>
<br>
<br>
<h2><center><strong><u><font color="red">Sua Avaliação de  Prioridade</font></strong></u></center></h2>


<div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio3"><font color ="green"><strong><u>PRIORIDADE VERDE</strong></u></label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2"><font color ="yellow"><strong><u>PRIORIDADE AMARELA</strong></u></label>
</div>
<div class="custom-control custom-radio"> 
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1"><font color ="red"><strong><u>PRIORIDADE VERMELHA</strong></u></label>
</div>
<div class="custom-control custom-radio">
<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio4"><font color ="blue"><strong><u>PRIORIDADE AZUL</strong></u></label>
</div>
<div class="custom-control custom-radio">
<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio5"><font color ="orange"><strong><u>PRIORIDADE LARANJA</strong></u></label>
</div>
<div class="custom-control custom-radio">

  <div class="form-row"> 
    <div class="col-12">

</form>

<script>
function funcao1()
{
   
alert("!!!TRIAGEM RELALIZADA COM SUCESSO!!! ");
}
</script>
<script>
function funcao2()
{
   
alert("!!!VOCÊ ACABAR DE SAIR DO PAINEL DE TRIAGEM!!! ");
}
</script>


</head>
<p>
<body>
<center>
     <a href="GerenciamentoRisco.php"><button type="submit" class="btn btn-primary btn-sm"onclick="funcao1()"
      value="Exibir Alert">Enviar Formulário</button></a>

    </body>
    <body>
     <a href="PaineldeEntrada.php"><button type="submit" class="btn btn-secondary btn-sm"onclick="funcao2()"
      value="Exibir Alert">Sair</button></a>
 </center> 
    </body>
</p>
    </div>
  </div>
</form>
<p>
</p>
<p>
</p>
         <img src="https://st.depositphotos.com/2229436/2405/v/950/depositphotos_24054919-stock-illustration-matted-colored-color-smiley-faces.jpg" width="120" height="120">

<p>
</p>
<p>
</p>


</span>

</form>
</div>

</form>
</form>
</body>
</html>
