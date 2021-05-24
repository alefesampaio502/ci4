<?php 

  $session = session();
  $primeiro_nome = $session->get('primeiro_nome');

  if($primeiro_nome == null):

     echo "<script>

            alert('Acesse sua conta para continuar');
            window.location.href = '/login';

     </script>";

   endif;
?>

<!DOCTYPE html>
<html lang="pt-BR">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sisema de gestão feito no CI4</title>
  <!-- General CSS Files -->
  
  <link rel="stylesheet" href="<?php echo base_url('assets/css/app.min.css');?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
<!--   <link rel="stylesheet" href="<?php echo base_url('assets/bundles/datatables/datatables.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css');?>"> -->
  <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url('assets/img/favicon.ico');?>" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      

  <?php include_once('navbar.php');?>
  <?php include_once('sidebar.php');?>