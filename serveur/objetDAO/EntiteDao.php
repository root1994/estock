<?php
	require('../classes/Entite.php');	
	class EntiteDAO{			
		public function out($filtre)
		{
			include('../config/config.php');
			$req=$BDD->prepare('SELECT * FROM entite WHERE '.$filtre.';');
            $req->execute();			
            $results = array();
			$objets = array();
			$finals = array();
            while($data=$req->fetch(PDO::FETCH_ASSOC)){				
				$obj= new Entite($data['id_entite'], $data['nom_entite'], $data['nomenclature']);				
				//array_push($commandesObjet,$role);
				//echo ("ici");
				array_push($results,array('result' => $data));
				array_push($objets,array('objet' => $obj));				
            }
			array_push($finals,array('resultat' => $results));
			array_push($finals,array('object' => $objets));
			//echo ($commandes[1]['object'][1]['objet']);
			//echo json_encode($commandes[0]['resultat']);
			return ($finals);
		}
		public function insert(Entite $arg){
			include('../config/config.php');
			$sql= "INSERT INTO entite (`id_entite`, `nom_entite`, `nomenclature`) VALUES (NULL, '".$arg->getNomEntite()."', '".$arg->getNomenclature()."');";			
			$req=$BDD->prepare($sql);
            $req->execute();    
            echo json_encode("ok");					
		}
		public function update(Entite $arg){
			include('../config/config.php');
			$sql="UPDATE entite SET nom_entite='".$arg->getNomEntite()."', nomenclature='".$arg->getNomenclature()."' WHERE id_entite=".$arg->getIdEntite()."";
			$req=$BDD->prepare($sql);
			$req->execute();
			$retour = array();
			$retour["status"] = true;
			echo json_encode($retour);			
		}
		public function delete(Entite $arg){
			include('../config/config.php');
			$sql="DELETE FROM entite WHERE id_entite=".$arg->getIdEntite()."";
			$req=$BDD->prepare($sql);
			$req->execute();
			$retour = array();
			$retour["status"] = true;
			echo json_encode($retour);			
		}		
	}	
?>