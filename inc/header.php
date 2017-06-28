<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD - Eagle ID</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>index.css">
    </head>
<body>

    <nav>
      <div>
        <div class="Navbar">
            <div>
            <div class="DivLeft">
                <a href="<?php echo BASEURL; ?>index.php" >CRUD: <?php echo NOME_DO_CANDIDATO; ?></a>
        </div>
                </div>
        <div id="navbar">
            <div class="DivRigth">
          <ul>          
            <li style="list-style: none;">
                <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Clientes <span></span>
                </a>
             </div>
            </div>
            </div>
                <ul style="display: none;">
                    <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                    <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<main>
