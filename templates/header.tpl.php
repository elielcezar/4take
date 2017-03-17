<?php 
global $user;
$uid = $GLOBALS['user']->uid; 
?>

 <?php
  
  /*if (($user->uid) && (!in_array('administrator', $user->roles))){ ?>
        <script type="text/javascript">window.location.href = "<?php print $front_page; ?>user";</script>
  <?php } */?>  

    <!-- Header -->
    <!--header>
        <div class="container"> 
            <ul class="menu-principal">
                <li><a href="#" data-toggle="modal" data-target="#cadastro-festivais">Envie um Festival</a></li>
            </ul>             
            <div class="logo"><a href="http://partiufestival.com"><img src="<?php print base_path() . path_to_theme() ?>/img/partiufestival.png" /></a></div>            
            
            <?php if($user->uid){ ?>
                <?php print views_embed_view('menu_usuario', 'default', $uid); ?>
                
            <?php } else { ?>
                <div class="cadastrese"><a class="login" href="http://partiufestival.com/user">Login</a> <a class="cadastro" href="http://partiufestival.com/user/register">Cadastre-se</a></div>
            <?php } ?>
        </div>
    </header-->  