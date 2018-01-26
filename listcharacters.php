<?php

    require 'config.php';
    
    llxHeader();
    
    $PDOdb = new TPDOdb;
    
    $l=new TListviewTBS('lcharacters');
	$sql = "SELECT pokemon_name,speed FROM pokemon ";
    
    echo $l->render($PDOdb, $sql,array(
	
		'title'=>array(
			'pokemon_name'=>$langs->trans('Pokemon')
			,'speed'=>$langs->trans('Speed')
		)
		,'link'=>array()
		,'hide'=>array('rowid')
		,'type'=>array()
		,'eval'=>array()
		,'search'=>array()
	));
    
    
    llxFooter();

