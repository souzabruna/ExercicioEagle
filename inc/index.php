<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE);?>
<head>
     <link rel="stylesheet" type="text/css" href="index.css">
</head>
<header>
    <div class="row">
        <div class="Container">
        <div class="col-sm-6">
            <h2>Dashboard</h2>
        </div>
        <div class="col-sm-6 text-right h2">
            <a class="btn btn-primary" href="<?php echo BASEURL; ?>customers/add.php"><i class="fa fa-plus"></i>fejgJLNovo Cliente</a>
            <a class="btn btn-default" href="<?php echo BASEURL; ?>customers"><i class="fa fa-refresh"></i> Atualizar</a>
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

<hr>

<table class="table table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th width="30%">Nome</th>
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
        <td><?php echo $customer['id']; ?></td>
        <td><?php echo $customer['name']; ?></td>
        <td><?php echo $customer['cpf_cnpj']; ?></td>
        <td>00 0000-0000</td>
        <td><?php echo $customer['city']; ?></td>
        <td class="actions text-right">
            <a href="<?php echo BASEURL; ?>customers/view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
            <a href="<?php echo BASEURL; ?>customers/edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
            <a href="#" class="delete-this" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
                <i class="fa fa-trash"></i> Excluir
            </a>
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

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
