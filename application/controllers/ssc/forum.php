<?php

class Forum extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->titre = "mon super site ";
        $this->load->helper('url');
       
    }

    public function acceuil() {

        //echo($this->titre);
        echo "c'est ta first page\n";
        $tab = array();
        $tab['nom'] = 'foultier';
        $tab['prenom'] = 'hugo';
        $tab['identifiant'] = 'f20903397';
        $tab['age'] = 23;
        $tab['actif'] = FALSE;
        $this->load->view('forum/vue', $tab, false);
    }

    public function prout() {
        echo "salut PROUUUUT";
    }

    public function manger($nourriture = '') {
        echo "salut je mange une " . $nourriture;
    }

   /* public function manger() {
        $this->manger("cerise");
    }*/

}

?>
