<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Administrator</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skin-blue.min.css">
      <?php 
      if(isset($css_files)){
          foreach($css_files as $files){ ?>
          <link type="text/css" rel="stylesheet" href="<?php echo $files; ?>" />
      <?php     }
      } ?>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="hold-transition skin-black sidebar-mini">
      <div class="wrapper">
         <header class="main-header">
            <a href="index2.html" class="logo">
               <span class="logo-mini"><img src="<?=base_url()?>assets/img/icon.png" class="img-responsive"></span>
               <span class="logo-lg"><img src="<?=base_url()?>assets/img/logo.jpg" class="img-responsive"></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <!-- <span class="hidden-xs fa fa-search">
                           </span> -->
                        </a>
                        <ul class="dropdown-menu">
                           <li class="user-header">
                            <span class="hidden-xs fa fa-search">
                            </span>
                           </li>
                           <li class="user-header">
                            <span class="hidden-xs fa fa-bell-o">
                            </span>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <aside class="main-sidebar">
            <section class="sidebar">
               <div class="user-panel">
                  <div class="pull-left image">
                     <img src="<?php echo base_url()?>/assets/img/user.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p> Administrator</p>
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
               </div>
               <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                     <input type="text" name="q" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                     </span>
                  </div>
               </form>
               <ul class="sidebar-menu">
                 <li class="header">HEADER</li>
                 <li class="active">
                    <a href="<?php echo base_url()?>admin/entities">
                      <i class="fa fa-link"></i> 
                      <span>Example 1</span>
                    </a>
                 </li>
                 <li>
                    <a href="<?php echo base_url()?>admin/events">
                      <i class="fa fa-link"></i> 
                      <span>Example 2</span>
                    </a>
                 </li>
                 <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Example 3</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="#">Link in level 2</a></li>
                       <li><a href="#">Link in level 2</a></li>
                    </ul>
                 </li>
              </ul>
            </section>
         </aside>