<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE);?>
<head>
     <link rel="stylesheet" type="text/css" href="index.css">
</head>
<div class="ContainerTable">
<header>
    <div class="row">
        <div class="ListHeader">
        <div class="ListTitle">
            <h2>Clientes</h2>
        </div>
        <div class="ButtonsHeader">
            <a class="BtnSmallPrimary" href="<?php echo BASEURL; ?>customers/add.php"><i class="fa fa-plus" style="  text-decoration: none; color: white; font-weight: bold;"></i> Novo Cliente</a>
            <a class="BtnSmallScondary" href="<?php echo BASEURL; ?>customers"><i class="fa fa-refresh"></i> Atualizar</a>
        </div>
    </div>
    </div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php clear_messages(); ?>
<?php endif; ?>



<table class="Table">
    
<thead>
    <tr>
        <div class="Id"><th>ID</th></div>
        <div class="Name"><th>Nome</th></div>
        <th>CPF/CNPJ</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Opções</th>
    </tr>
</thead>

<tbody>
<?php if ($customers) : ?>
<?php foreach ($customers as $customer) : ?>
    <tr>
        <div class="Id"><td><?php echo $customer['id']; ?></td></div>
        <div class="Name"><td><?php echo $customer['name']; ?></td></div>
        <td><?php echo $customer['cpf_cnpj']; ?></td>
        <td>00 0000-0000</td>
        <td><?php echo $customer['city']; ?></td>
        <td class="actions text-right Line">
           <div class="ButtonView"> <a href="<?php echo BASEURL; ?>customers/view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a></div>
          <div class="ButtonEdit">  <a href="<?php echo BASEURL; ?>customers/edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a></div>
           <div class="ButtonDelete"><a href="#" class="delete-this" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
               <i class="fa fa-trash"></i> Excluir </a></div>
        </td>
    </tr>
<?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="6">Nenhum registro encontrado.</td>
    </tr>
<?php endif; ?>
</tbody>
</table>
</div>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
    
