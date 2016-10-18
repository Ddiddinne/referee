<?php
class Sport {
    private $_name;
    private $_rules;
	
    public function setSport($post) {
        $fullSport =true;
        if(isset($post['sportName'])){
            $this->_name=$post['sportName'];

        } else {
            $this->_name='';
            $fullSport =false;
        }

         if(!empty($_POST['sportRules'])){
            $this->_rules=$post['sportRules'];
        } else {
            $this->_rules='';
            $fullSport =false;
        } 
        return $fullSport;
    }

    public function saveSport(){
        try {

			Database::insertSport($this->_name,$this->_rules); //insertion of a custom Sport in Database (done in the database.php)
?> 
<h3><?php echo $this->_name ?> was succesfully added to the database !</h3>
<br />		
<?php		
        }
		catch (PDOException $e) {
            echo("<pre>");
            var_dump($e);
        }
    }
	//affichage du formulaire pour créer un sport
    public function printAddSportForm(){
        $html = "<form action='index.php?page=createSport' method='post' class='size20px'>";
        $html .=" <br /> <b> Sport name : <b><br /> 
			   <input type='text' name='sportName' size =40 placeholder='enter the name of your sport here...'/><br /><br />";
        
		$html .="Sport rules: <br />
			 <textarea name='sportRules' id='sportRules' value='enter the rules of your sport here...'/></textarea><br /><br />";
		$html .="<input type='submit' name='submitBtn' value='Go' class='btn btn-dark btn-lg'/>";        
        echo $html;
    }
}
?>
