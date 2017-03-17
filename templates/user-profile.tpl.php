
<?php 
$uid = $GLOBALS['user']->uid; 
?>

 <div class="header header-filter">
        <div class="container">
            <div class="row">
            	<div class="col-sm-12 capa">                
                <?php if(isset($uid)) : ?>
            		<?php print views_embed_view('usuario_capa', 'default', $uid); ?>
            		<?php endif ?>
            	</div>
            </div>
        </div>
    </div>

   <div class="container">

  <div class="basic-info card">		
 
		<?php print views_embed_view('usuario_info', 'default'); ?>	

    <a class="editar-perfil" href="http://partiufestival.com/user/<?php print $uid; ?>/edit">Editar Perfil</a>
    
  </div>

  </div>
  

<?php print render($page['content']); ?>


  



