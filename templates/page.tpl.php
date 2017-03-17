<?php include "header.tpl.php"; ?>  

<section class="conteudo">   
        <div class="container">

             <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?> 

        <div class="shortcuts">
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
              <?php print render($tabs); ?>
            <?php endif; ?>  
        </div> 
        	
        	 <?php print render($page['content']); ?>   
           
        </div>
        <!-- /.container --> 
</section>
<?php include "footer.tpl.php"; ?>

