<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Formulario de Cadastro</title>
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Folha de Estilo -->
    <link href="css/style.css" rel="stylesheet" type="text/css"  />

<!--fonts google-->
<link href='//fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,500,700,900,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min">

       
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="main">
        <h1> <img src="img/topo.png" /></h1>
        <div class="main-row">
        
        <h2><span> Cadastro </span></h2>
            <p>Cadastre corretamente todos os dados</p>
        
            <div class="w3ls-contact">
                <form action="dados.php" method="post">
                    <h4>Nome Completo</h4>

                    
  
  
  

                    
                    <label >

                    



                     <span> <i class="fa fa-user" aria-hidden="true"></i></span>
  <input class="form-control" type="text" placeholder="Nome">

                    </label>







                    <h4>Telefone</h4>
                    
<label>
                    <span> <i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="number" name="telefone" placeholder="Telefone" required=""> 

                    </label>
                    
                    
 


                    <h4>Tipo</h4>
                    
                
                    <select required class="tipo-style" name="tipo" />
                   
                   
                   <option value="" style="color:#CDCDCD" > Selecione</option>
                    <option value="1">Visitante</option>
                    <option value="2">Consolidacao</option>
                    <option value="3">Membro</option>
                </select> 
                
             
                    <div class="clear"> </div>
                    <input type="submit" value="Salvar">
                    
                    <div class="clear"> </div>
                </form>
            </div>  
        </div>  


    </div>  
    </body>
</html>
