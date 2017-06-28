<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>
<div class="Container">
<div class="Title">
<h1>Dashboard</h1>
</div>

<?php if ($db) : ?>

<div>
    <div class="divButtons">
    <div class="ButtonPrimary">
        <a href="customers/add.php" class="btn btn-primary">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <i class="fa fa-plus fa-5x"> <img src="/layout/icones/add.svg" style="width: 90px; height: 90px;"></i>
                </div>
                <div class="col-xs-12 text-center">
                    <p>Novo Cliente</p>
                </div>
            </div>
        </a>
    </div>

    <div class="ButtonSecondary">
        <a href="customers" class="btn btn-default">
            <div class="row">
                <div class="col-xs-12 text-center btnContent">
                     <i class="fa fa-plus fa-5x"> <img src="/layout/icones/user.svg" style="width: 90px; height: 90px;"></i>
                </div>
                <div class="col-xs-12 text-center btnContent">
                    <p>Clientes</p>
                </div>
            </div>
        </a>
    </div>
       
</div>
</div>
    
</div>
 <div class="Wellcome">
         Bem-vindo
   </div>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
