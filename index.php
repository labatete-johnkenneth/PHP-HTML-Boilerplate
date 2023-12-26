<?php
  function html5  (
    $html5_content,
  )  {
    return "<!DOCTYPE html>$html5_content";
  }
  function html  (
    $html_content,
    $html,
  )  {
    $html = sprintf('lang="%s"', $html) ?: '';
    return "<html $html>$html_content</html>";
  }
  function head  (
    $charset,
    $name,
    $viewport,
    $title,
    $bs_css,
    $bs_js,
    $css,
  )  {
    $charset = sprintf('charset="%s"', $charset) ?: '';
    $name = sprintf('name="%s"', $name) ?: '';
    $viewport = sprintf('viewport="%s"', $viewport) ?: '';
    $title = sprintf('<title>"%s"</title>', $title) ?: '';
    $css = sprintf('<style><?php include "%s" ?></style>', $css) ?: '';
    return "<head><meta $charset><meta $name $viewport>$title$bs_css$bs_js$css</head>";
  }
  function body  (
    $body_content,
    $container,
    $row,
    $col,
  )  {
    $container = sprintf('class="%s"', $container) ?: '';
    $row = sprintf('class="%s"', $row) ?: '';
    $col = sprintf('class="%s"', $col) ?: '';
    return "<body><div $container><div $row><p $col>$body_content</p></div></div></body>";
  }
  require 'index.view.php';
