<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Receitas</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="./IMG/teste_icone2.jpg" type="image/x-icon">
	<style type="text/css">
		*{
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: normal;
    box-sizing: border-box;border: none;overflow: none;
    
}

		body {
          
           background-image: linear-gradient(to right, transparent 0%, black 90%), url(./IMG/bacground.jpg);
           height: 100vh;
           width: 100vw;
}

html{
    overflow-x: hidden ;
}

header{
    background-image: url(img22.jpg);
    height: 90px;
    box-shadow: 0px 5px yellow;
}
h1 {
    text-align: center;
    color: white;
    font-size-adjust: bold;
  
}

/*Menu*/
.menu-h ul {
    list-style: none;
    padding: 0px;
    background-color: wheat;
}
.menu-h ul li {
    display: inline;
}
.menu-h ul li a{
    display: inline-block;
    color: red;
    text-decoration: none;
    transition: background .4s;
    padding: 7px;
    margin: 2px 30px;
} 
.menu-h ul li a:hover{
    background-color: red;
    color: white;
}
ol {
   list-style-type: none;
    columns: 3;
    margin: 3px;
    height: 540px;
    width: 1126px;  
    margin-left: 30px;
}

.sabores {
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
    padding: 3px;
    font-size: 1em;
    border-radius: 5px;
    
}

.portuguesa{
  width: 240px;
  border-radius: 10%;
  margin-right: 30px;
  margin-left: 90px;
  float: right;
}

.calabresa{
  width: 240px;
  border-radius: 10%;
  margin-right: 25px;
  margin-left: 90px;
  float: right;
}
.qj{
  width: 240px;
  border-radius: 10%;
  margin-right: 30px;
  margin-left: 90px;
  float: right;
}
h2{
font-size: 1.2em;
margin-left: 100px;
color: #fff;
}
h3{
    color: #fff;
}
p{
  margin-top: 2;
  margin-bottom: 190px;
  line-height: 1.4;
  font-size: bold;
  color: #fff;

}
.input1{
  float: right;
  margin-right: 280px;
  margin-top: -35px;
 padding: 5px;
 text-align: center;
}
.submit1{
    float: right;
    margin-right: 200px;
    margin-top: -35px;
   padding: 5px;
   text-align: center;
}
.submit1:hover{
  background-color: red;
  color: #fff;
}
details summary::-webkit-details-marker {
background: red;
color: #fff;
font-size: 500%;
}
summary::-webkit-details-marker {
display: none
}
summary:after {
background: darkred;
border-radius: 5px;
content: "+";
color: #fff;
float: left;
font-size: 1.5em;
font-weight: bold;
margin: -5px 10px 0 0;
padding: 0;
text-align: center;
width: 20px;
}
summary{
  color: #fff;
}
details[open] summary:after {
content: "-";
}
/*Footer*/
.footer-pagina{
    width: 100%;
    background-color: #757673;
}
.footer-pagina .grupo-2{
    background-color: wheat;
    padding: 15px 10px;
    text-align: center;
    color: red;
}


	</style>

</head>
<header></header>

<body>
  <!--Menu-->
    <nav class="menu-h">
       <ul>
           <li><a href="./index.php">Home</a></li>
           <li><a href="./cardapio.php">Receitas</a></li>
           <li><a href="./sobre.php">Sobre N??s</a></li>
           <li><a href="./contato.php">Contatos</a></li>
           <li><a href="./dicas.php">Dicas/Fotos</a></li>
           <li><a href="./localizacao.php">Localiza????o</a></li>
           <li><a href="./login.php">Login</a></li>
          
             <form action="busca.php" method="POST" class="busca"><input name="pesquisar" type="text" class="input1" placeholder="Pesquise um sabor aqui">
            <input type="submit" class="submit1" name="btn" value="Pesquisar"></form>
       </ul>
    </nav><br></br>
 
    <h1>Que tal voc?? mesmo fazer uma das nossas pizzas mais vendidas ?&#x1F631;</h1><br>
<ol>
<li class="sabores">
  <h2>Pizza Portuguesa</h2>
  <details><summary>Preparo</summary>
    <p class="dest">Fa??a uma cova no meio da farinha depois de peneirada com o fermento e o sal.
      Acrescente a ??gua e o ??leo.
      Amasse bem e abra com o rolo, formando uma massa lisa.
      Unte uma f??rma para pizza (m??dia) e modele a massa dentro.
      Despeje sobre a massa um pouco de molho de tomate, cubra com queijo e presunto.
      Em seguida coloque as fatias de tomate, o ovo picado e a cebola.
      Decore com azeitonas, tempere com or??gano e tempero verde e leve ao forno pr??-aquecido por 20 minutos, ou at?? a massa ficar assada.</p></details>
  <img class="portuguesa" src="./Pizzas/card.portuguesa.jpg">
<h3><em>Ingredientes:</em></h3>
<p> <strong>Massa: </strong>
    2 x??caras (ch??) de farinha de trigo<br>
    1 colher (sopa) de fermento em p??<br>
    1 x??cara (ch??) de ??gua<br>
    4 colheres (sopa) de ??leo<br>
    <strong>Cobertura:</strong> 150 g de queijo mussarela<br>
    50 g de presunto<br>
    1 tomate em rodelas<br>
    1 ovo cozido<br>
    1 cebola picada<br>
    Molho de tomate<br>
    Azeitonas para decorar, or??gano e tempero verde a gosto.</p>

    

 <h2>Pizza de Calabresa</h2>
 <details><summary>Preparo</summary>
  <p class="dest">Em um recipiente coloque os ingredientes secos.
    Dissolva o fermento em um pouco de ??gua, utilize.
    Junte o azeite e o restante da ??gua.
    Misture os ingredientes com as m??os, sove a massa por mais ou menos 20 minutos, at?? que esteja uniforme.
    Divida a massa em 7 partes, forme bolinhas e deixe descansar por 2 horas.
    Abra a massa com rolo, recheie e asse.
    Sobre o disco de pizza, coloquer o molho, o tomate fresco,a lingui??a, o or??gano e o parmes??o.
    Forneie.
    Enfeite com a cebola frita.
    Sirva em seguida.</p></details>
 <img class="calabresa" src="./Pizzas/card.calabresa.jpg">
 <h3><em>Ingredientes:</em></h3><br>
 <p><em>Massa:</em> de farinha de trigo
    20g de sal<br>
    10g de a????car<br>
    50ml de azeite<br>
    12g de fermento biol??gico<br>
    500ml de ??gua morna<br>
    Recheio:1 tomate fresco<br>
    100g de parmes??o ralado<br>
    200g de lingui??a calabresa fatiada<br>
    100g de cebola frita.</p>
    
    
  
     <h2>Pizza Quatro Queijos</h2>
     <details><summary>Preparo</summary>
          <p class="dest">Preaque??a o forno a 180??C.
            Em uma tigela, coloque o fermento e o a????car. Mexa at?? dissolver.
            Junte a ??gua, o leite, o ??leo e o sal. Misture bem.  
            Acrescente a farinha de trigo, aos poucos, e sove at?? obter uma massa lisa e homog??nea.
            Cubra com um pano de prato limpo e deixe crescer por 1 hora, ou at?? dobrar de volume.
            Abra a massa em dois discos de 30 cm de di??metro, espalhe metade da polpa de tomate em cada disco e leve-os ao forno por 10 minutos.
            Retire do forno e distribua os queijos entre os dois discos. Volte-os ao forno quente por mais 10 minutos, ou at?? derreter a mussarela.S 
            Retire do forno e sirva em seguida.</p></details>
     <img class="qj" src="./Pizzas/card.quatr_queijo.jpg">
     <h3><em>Ingredientes:</em></h3><br>
      <p>15 gramas de fermento biol??gico<br>
        1/2 colher (sopa) de a????car<br>
        1/2 x??cara (ch??) de ??gua morna<br>
        1 x??cara (ch??) de leite morno<br>
        2 colheres (sopa) de ??leo<br>
        1/2 colher (sopa) de sal<br>
        4 x??caras (ch??) de farinha de trigo<br>
        1/2 x??cara (ch??) de massa de tomate<br>
        200 gramas de queijo mussarela ralado<br>
        60 gramas de queijo gorgonzola picado<br>
        250 gramas de requeij??o<br>
        80 gramas de queijo parmes??o ralado grosso.</p><br></li>
        
   
        
       
</ol>
</div>

<!--Footer-->
<footer class="footer-pagina">
    <div class="grupo-2">
        <small>&copy;2022 <b>Projeto Integrador/SENAC</b> - Todos os direitos reservados.</small>
    
</footer>

</script>
</body>
</html>