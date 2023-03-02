<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PSCD Admin Template | Log in</title>
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="softdevelopinc">
    <meta name="author" content="softdevelopinc@gmail.com">

    <!--link rel="stylesheet" href="<?php echo LibsURI; ?>bootstrap/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="<?php echo LibsURI; ?>/fontawesome/css/all.min.css">
  	<link rel="stylesheet" href="<?php echo MediaURI;?>admin/css/adminlte.min.css">
  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	<?php echo vendor_html_helper::_cssHeader(); ?>

    <script type="text/javascript">
      var rootUrl   = "<?=RootURL;?>";
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include_once 'views/admin/layout/'.$this->layout.'header.php'; ?>

  <?php include_once 'views/admin/layout/'.$this->layout.'left-sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
