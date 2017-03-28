<?php
class SeoHelper extends AppHelper {
	
	public $helpers = array('Html', 'Form');
	public $metas = array();
	
	
	public function startup(){
		
	}
	
	public function metas($metas = array()){
		
		$metaTags = '';
		
		if(empty($metas)){
			$metas = $this->metas; 
		}
		
		/* Etiqueta META CONTENT LANGUAGE */
		if(isset($metas['content_language'])){
			$metaTags .= sprintf('<meta http-equiv="Content-Language" content="%s" />
			', $metas['content_language']);
		} else {
			$language = 'es-DO';
			$metaTags .= sprintf('<meta http-equiv="Content-Language" content="%s" />
			', $language);
		}
	
		/* Etiqueta META LANGUAGE */
		if(isset($metas['language'])){
			$metaTags .= sprintf('<meta name="language" content="%s" />
			', $metas['language']);
		} else {
			$language = 'spanish';
			$metaTags .= sprintf('<meta name="language" content="%s" />
			', $language);
		}
		
		/* Etiqueta META AUTHOR */
		if(isset($metas['author'])){
			$author = 'Pavel Núñez Deschamps :: pndeschamps@gmail.com :: pnunez@solucionesorico.com';
			$metaTags .= sprintf('<meta name="author" content="%s" />
			', $author);
		}
		
		/* Etiqueta META DESCRIPTION */
		if(isset($metas['meta_description'])){
			$metaTags .= sprintf('%s
			', $this->Html->meta('description', $metas['meta_description']));
		}
		
		/* Etiqueta META KEYWORDS */
		if(isset($metas['meta_keywords'])){
			$metaTags .= sprintf('%s
			', $this->Html->meta('keywords', $metas['meta_keywords']));
		}
		
		/* Etiqueta META CONTENT GENERATOR */
		if(isset($metas['meta_keywords'])){
			$metaTags .= sprintf('%s
			', $this->Html->meta('keywords', $metas['meta_keywords']));
		}
		
		
		
			/* Etiquetas para ROBOTS */		
			$metaTags .= sprintf('<meta name="robots" content="index,follow" />
			');
			$metaTags .= sprintf('<meta name="googlebot" content="index,follow" />
			');
			$metaTags .= sprintf('<meta name="revisit-after" content="3 days" />
			');
			
		
		
		return $metaTags;
		
	}
	
}	