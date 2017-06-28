<?php 
    require_once('functions.php'); 
    add();
?>
<head>
     <link rel="stylesheet" type="text/css" href="index.css">
</head>
<?php include(HEADER_TEMPLATE); ?>
<div class="ContainerCreate">
<div class="TitleAdd">
<h2>Novo Cliente</h2>
   </div>
<div>
<div class="Form">
<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="DivLarge">
    
    <div class="InputLarge">
    <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control Input" id="name" name="customer['name']">
    </div>

    <div class="InputSmall">
      <label for="cnpj_cpf">CNPJ / CPF</label>
      <input type="text" id="cnpj_cpf" class="form-control Input" name="customer['cpf_cnpj']">
    </div>

    <div class="InputSmall">
      <label for="birthdate">Data de Nascimento</label>
      <input type="text" id="birthdate" class="form-control Input" name="customer['birthdate']">
    </div>

    <div class="InputSmall">
      <label for="phone">Telefone</label>
      <input type="text" id="phone" class="form-control Input" name="customer['phone']">
    </div>

  </div>
  
  <div class="DivLarge">
    <div class="InputLarge">
      <label for="address">Endereço</label>
      <input type="text" id="address" class="form-control Input" name="customer['address']">
    </div>
    
    <div class="InputSmall">
      <label for="zip_code">CEP</label>
      <input type="text" id="zip_code" class="form-control Input" name="customer['zip_code']">
    </div>
  
    <div class="InputSmall">
      <label for="city">Cidade</label>
      <input type="text" id="city" class="form-control Input" name="customer['city']">
    </div>

    <div class="InputSmall">
      <label for="state">Estado</label>
      <input type="text" id="state" class="form-control Input" name="customer['state']">
    </div>
    </div>
    
  <div id="actions" >
    <div class="ButtonsDiv">
        <button type="submit" class="BtnSmallPrimary">Salvar</button>
        <div class="BtnSmallScondary"> <a href="index.php" class="btn btn-default">Cancelar</a></div>
    </div>
  </div>
</form>
 </div>
   
</div>
     <div class="FooterForm">
        <div class="Icon"></div>
    </div>
<?php include(FOOTER_TEMPLATE); ?>
