<?php
// auto-generated by sfViewConfigHandler
// date: 2012/07/20 10:24:40
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('utopia-white.css', '', array ());
  $response->addStylesheet('utopia-responsive', '', array ());
  $response->addJavascript('jquery.min.js', '', array ());
  $response->addJavascript('jquery.cookie.js', '', array ());
  $response->addJavascript('utopia.js', '', array ());
  $response->addJavascript('jquery.hoverIntent.min.js', '', array ());
  $response->addJavascript('jquery.easing.1.3.js', '', array ());
  $response->addJavascript('jquery.datatable.js', '', array ());
  $response->addJavascript('jquery.sparkline.js', '', array ());
  $response->addJavascript('jquery.vticker-min.js', '', array ());
  $response->addJavascript('datepicker.js', '', array ());
  $response->addJavascript('image-gallery.min.js', '', array ());
  $response->addJavascript('jquery.simpleWeather.js', '', array ());
  $response->addJavascript('maskedinput.js', '', array ());
  $response->addJavascript('chosen.jquery.js', '', array ());
  $response->addJavascript('sidebar.js', '', array ());
  $response->addJavascript('load-image.min.js', '', array ());
  $response->addJavascript('jquery.validationEngine.js', '', array ());
  $response->addJavascript('jquery.validationEngine-en.js', '', array ());
  $response->addJavascript('jquery.queryloader2.js', '', array ());
  $response->addJavascript('header.js', '', array ());


