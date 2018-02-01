<?php

    require 'config.php';
    
    llxHeader();
    
    $PDOdb = new TPDOdb;
    
    $l=new TListviewTBS('lcharacters');
	$sql = "SELECT nom,genre,race,classe,taille,poid,forc,intelligence,sagesse,dexterite,constitution, charisme FROM personnage ";
    
    echo $l->render($PDOdb, $sql,array(
	
		'title'=>array(
			'nom'=>$langs->trans('Nom')
			,'genre'=>$langs->trans('Sexe')
			,'race'=>$langs->trans('Race')
			,'classe'=>$langs->trans('Classe')
			,'taille'=>$langs->trans('Taille')
			,'poid'=>$langs->trans('Poid')
			,'forc'=>$langs->trans('Force')
			,'intelligence'=>$langs->trans('Intelligence')
			,'sagesse'=>$langs->trans('Sagesse')
			,'dexterite'=>$langs->trans('Dexterite')
			,'constitution'=>$langs->trans('Constitution')
			,'charisme'=>$langs->trans('Charisme')
		)
		,'link'=>array()
		,'hide'=>array('rowid')
		,'type'=>array()
		,'eval'=>array()
		,'search'=>array()
	));
    
    
    llxFooter();

