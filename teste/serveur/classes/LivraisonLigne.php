<?php
	class LivraisonLigne{
		private $_idLivraisonLigne;
		private $_qteLivree;
		private $_livraison;
		private $_materiel;
		
		//Constructeurs
		public function __construct($id, $qte, $livraison, $materiel){
			$this->_idEntreeLigne=id;
			$this->setQteLivree($qte);
			$this->setLivraison($entree);
			$this->setMateriel($materiel);
		}
		
		//Accesseurs
		public function getIdLivraisonLigne(){
			return $this->_idLivraisonLigne;		
		}
		public function getQteLivree(){
			return $this->_qteLivree;
		}
		public function getLivraison(){
			return $this->_livraison;
		}
		public function getMateriel(){
			return $this->_materiel;
		}
		
		//Mutateurs
		public function setQteLivree($qte){
			$this->_qteLivree=$qte;
		}
		public function setLivraison($livraison){
			$this->_livraison=$livraison;
		}
		public function setMateriel($materiel){
			$this->_materiel=$materiel;
		}
	}
?>