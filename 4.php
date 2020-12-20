<?php
header("Content-Type: text/html; charset=iso-8859-1");
$titulo = "rica estas"; 
$descripcion = "mamasota"; 
$imagen = "https://pbs.twimg.com/profile_images/987066872481964035/HmrkpNwz.jpg";  


?>
<meta property="og:url" content="<?php echo$url;?>">
<meta property="og:title" content="<?php echo$titulo;?> ">
<meta name="description" content="<?php echo$descripcion;?>">
<meta name="author" content="<?php echo$url;?>">
<meta name="og:description" content=" <?php echo$descripcion;?>">
<meta property="og:site_name" content="Google">
<meta property="og:image" content="<?php echo$imagen;?>">
<meta property="og:type" content="website">
<meta name="robots" content="noodp">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@Google">
<meta property="twitter:title" content=" <?php echo$titulo;?> ">
<meta name="twitter:creator" content="@Google">
<meta name="twitter:description" content=" <?php echo$descripcion;?>">
<meta name="twitter:image" content="<?php echo$imagen;?>">
<meta itemprop="name" content=" <?php echo$titulo;?> ">
<meta itemprop="description" content=" <?php echo$descripcion;?>">
<meta itemprop="image" content="<?php echo$imagen;?>">

<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://www.dominio.com");
?>