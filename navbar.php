 <!-- header start -->
 <header class="header-style-2" id="home">
     <div class="main-header navbar-searchbar">
         <div class="container-fluid-lg">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="main-menu">
                         <div class="menu-left">
                             <div class="brand-logo">
                                 <a href="index.php">
                                     <img src="<?=storage($setting['logo'])?>" class="img-fluid blur-up lazyloaded" style="width:300px" alt="logo">
                                 </a>
                             </div>
                         </div>
                         <nav>
                             <div class="main-navbar">
                                 <div id="mainnav">
                                     <div class="toggle-nav">
                                         <i class="fa fa-bars sidebar-bar"></i>
                                     </div>
                                     <ul class="nav-menu">
                                         <li class="back-btn d-xl-none">
                                             <div class="close-btn">
                                                 Menu
                                                 <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                 </span>
                                             </div>
                                         </li>
                                         <?php
                                            $caregory = new Crud('category');

                                            foreach ($caregory->get() as $value) :
                                            ?>
                                             <li class="mega-menu dropdown home-menu">
                                                 <a href="brand.php?category=<?= $value['slug'] ?>" class="nav-link menu-title"><?= $value['name'] ?></a>
                                             </li>
                                         <?php
                                            endforeach;
                                            ?>
                                     </ul>
                                 </div>
                             </div>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- header end -->
 <!-- mobile fix menu start -->
 <div class="mobile-menu d-sm-none">
     <ul>
         <?php
            $caregory = new Crud('category');
            foreach ($caregory->get() as $value) :
            ?>
             <li>
                 <a href="brand.php?category=<?= $value['slug'] ?>" class="nav-link menu-title"><?= $value['name'] ?></a>
             </li>
         <?php
            endforeach;
            ?>
     </ul>
 </div>
 <!-- mobile fix menu end -->