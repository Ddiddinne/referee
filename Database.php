<?php

$bdd = Database::getDb();

class Database {

    private static $_db;

    const DB_LOGIN = 'root';
    const DB_PASSWORD = '';

    public static function getDb() {
        if (!self::$_db) {
            self::$_db = new PDO('mysql:host=localhost;dbname=sportSite', self::DB_LOGIN, self::DB_PASSWORD
                , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        }

        return self::$_db;
    }
	public static function insertSport($_name, $_rules) {
		$bdd = Database::getDb();
		$req=$bdd->prepare('insert into sport (sport_name, rules) values (:sport_name, :sport_rules)');
		$req->execute(array(
		"sport_name"=>$_name,
		"sport_rules"=>$_rules
		));
	}
	public static function insertGame($sport, $Team1, $Team2, $points1, $points2){
		$bdd = Database::getDb();
		//determination of the sport id according to the sport name given for a proper incorporation into the database
		$req=$bdd->prepare('select id_sport from sport where sport_name="'.$sport.'"');
		$req->execute(array());
		$sportid=$req->fetch();
		//insertion into the database
		$req=$bdd->prepare('insert into partie (equipe1_name, equipe2_name, score_equipe1, score_equipe2, id_sport) values (:equipe1_name, :equipe2_name, :score_equipe1, :score_equipe2, :id_sport)');
		$req->execute(array(
		"equipe1_name"=>$Team1,
		"equipe2_name"=>$Team2,
		"score_equipe1"=>$points1,
		"score_equipe2"=>$points2,
		"id_sport"=>$sportid['id_sport']));
	}
	public static function getSport(){
		$bdd = Database::getDb();
		$req=$bdd->prepare('select sport_name from sport');
		$req->execute(array());
		return $req;
	}
	public static function getRules() {
		$bdd = Database::getDb();
		$query="select sport_name, rules from sport";
		$req=$bdd->prepare($query);
		$req->execute(array());
		return $req;
	}
	public static function getGames() {
		$bdd = Database::getDb();
		$query="select sport_name, equipe1_name, equipe2_name, score_equipe1, score_equipe2 from partie, sport where partie.id_sport=sport.id_sport";
        $req=$bdd->prepare($query);
        $req->execute(array());
		return $req;
	}
	public static function deleteAllGames() {
		$bdd = Database::getDb();
		$req=$bdd->prepare('delete from partie');
		$req->execute(array());
	}
	public static function deleteSport($_sport){
		$bdd = Database::getDb();
		$req=$bdd->prepare('delete from sport where sport_name="'.$_sport.'"');
		$req->execute(array());
	}
	
} 