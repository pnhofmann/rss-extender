<?php

$config['author']		= "Lars Formella";
$config['author_url']	= "http://www.larsformella.de/portfolio/programme-software/rss-extender/";
$config['url']			= "http://www.heise.de/newsticker/heise-atom.xml";
$config['base_url']		= "http://www.heise.de";
$config['content'] = array("#<(div|p) (id=\"p_1\"\s+)?class=\"(meldung_wrapper|output_text|kicker_toc|article-content|article_page_intro|initial|akwa-article__content)[^>]*>(.*)</(div|p)>\s+(<!-- RSPEAK_STOP -->\s+)?(<!--googleoff: all-->\s+)?(</section>\s+)?(<footer|<div class=\"clearcontent\"></div>|<div class=\"article-footer__content\">)#Uis", 4);
$config['search']		= array("#<span class=\"bildunterschrift\">.*<\/span>#Uis",
  "#<(div|aside)[ ]*class=\"[^\"]*(akwa-ad-container|bcadv).*<\/(noscript|aside)>#Uis",
  "#<span class=\"source\">.*<\/span>#Uis",
  "#<h1>.*<\/h1>#Uis",
  "#<!-- [a-z_-]+ -->#Uis",
  "#<script.*>.*<\/script>#Uis",
  "#<noscript>.*<\/noscript>#Uis",
  "#<div class=\"video_titel\">[^<]*<\/div>#Uis",
  "#<section class=\"themenseite_preisvergleich.*<\/section>#Uis",
  "#<a-pvg.*<\/a-pvg>#Uis",
  "#<div class=\"a-inline-textbox.*<\/div>#Uis",
  "#http://www.heise.de//#Uis");
$config['replace']		= array("",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "",
  "//");

?>
