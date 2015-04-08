<?php defined( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;

$input = $app->input;

$print = $input->get('print',0);
$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/kickstart.css');
if ($print != 0)
{
    $doc->addStyleSheet($tpath.'/css/print.css?v=1');
}

?><!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile viewport optimized -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
</head>

<body id="print">
  <div id="overall">

      <?php if($app->input->get('option') != 'com_pagestreet') : ?>
          <jdoc:include type="message" />
      <?php endif;?>

      <jdoc:include type="component" />
  </div>
  <?php if ($print == '1') echo '<script type="text/javascript">window.print();</script>'; ?>
</body>

</html>
