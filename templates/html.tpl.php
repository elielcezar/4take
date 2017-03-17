<!DOCTYPE html>
<html>
  <head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
 
        <meta name="distribution" content="Global" />
        <meta name="robots" content="all" />
        <meta name="language" content="pt-br" />
        <meta name="title" content="4Take" />
        <meta name="description" content="Bem vindo ao primeiro clube exclusivo para locações do país!" />
        <meta name="keywords" content="" />
        <link rel="image_src" href="" />
        <meta property="og:title" content="4Take"/>
        <meta property="og:description" content="Bem vindo ao primeiro clube exclusivo para locações do país!"/>
        <meta property="og:image" content=""/>    
        <meta property="og:type" content="website" /> 
  
      
 
    
    <?php print $styles; ?>
    <?php print $scripts; ?>  
    <!-- Custom Fonts -->
  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,900,900i" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php print base_path() . path_to_theme() .'/' ?>img/favicon.png">
    <script src="https://use.fontawesome.com/e3b6fded0c.js"></script>
    <link rel="stylesheet" href="http://4take.com.br/site/sites/all/themes/fortake/css/aos.css" />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>


</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
 
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
