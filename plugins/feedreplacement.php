<?php
/*
Plugin Name: FeedReplacement
Plugin URI:  http://plugins.gelatocms.com/feedreplacement/
Description: 
Author: Victor Bracco
Author URI: http://www.vbracco.com.ar/
Version: 0.3
*/ 
class feedreplacement extends plugins {
	
	function feedreplacement() {
		global $user, $conf, $tumble;
		
		//agregar al los panel de options un input mas
		$this->addAction('add_options_panel', 'feedreplacement_setOptionsPanel');
		
		//crea o verifica que la opcion que usa de la tabla de opciones esta creada
		$this->addAction('gelato_init', 'feedreplacement_check');
		
		//reemplaza el link del feed de gelato por el link de feedburner
		//$this->addAction('add_post', 'dameCinco');
		
		//lo mismo pero con el que esta en el header
		$this->addAction('gelato_includes', 'feedreplacement_includeFeed');
		
		//redirecting all trafic
		$this->addAction('feed_header', 'feedreplacement_redirect');
		
		//guarda la opcion si viene por POST
		if ($user->isAdmin()) {
			if(isset($_POST["feedreplacement_url"])){
				if (!$tumble->saveOption($_POST["feedreplacement_url"], "feedreplacement_url")) {
					header("Location: ".$conf->urlGelato."/admin/options.php?error=1&des=".$conf->merror);
					die();
				}	
			}
		}
	}
	
	function feedreplacement_setOptionsPanel() {
		global $conf;
		echo '<li><label class="help" for="feedreplacement_url">'.__("Replacement Feed:").'</label>
		<input type="text" name="feedreplacement_url" id="feedreplacement_url" value="'.$conf->get_option('feedreplacement_url').'" class="txt help" title="'.__("Introduce your new feed url into this input").'"/></li>';
	}
	
	function feedreplacement_check(){
		global $db,$conf;
		$sqlStr = "SELECT COUNT(*) as exist FROM `".$conf->tablePrefix."options` WHERE name='feedreplacement_url' LIMIT 1";
		if ($db->ejecutarConsulta($sqlStr)) {
			$row=$db->obtenerRegistro();
			if($row["exist"]==0){
				$sql = "INSERT INTO `".$conf->tablePrefix."options` VALUES ('feedreplacement_url', '');";
				$db->ejecutarConsulta($sql);
			}
		}
	}
	
	function feedreplacement_includeFeed(){
		global $conf,$gelato_includes,$feed_url;
		$feedreplacement_url = $conf->get_option('feedreplacement_url');
		if($feedreplacement_url!=""){
			$feed_url = $feedreplacement_url;
		}
	}
	
	function feedreplacement_redirect(){
		global $conf;
		$feedreplacement_url = $conf->get_option('feedreplacement_url');
		if (!preg_match("/feedburner|feedvalidator/i", $_SERVER['HTTP_USER_AGENT'])) {
			header("Location: ".$feedreplacement_url);
			header("HTTP/1.1 302 Temporary Redirect");
			exit();
		}
	}
}

?>