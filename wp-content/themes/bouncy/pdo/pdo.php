
<?php
ini_set('display_errors', 'On');
class User{
	protected $dates = ['created'];

	public function getFullName(){
		return "{$this->first_name} {$this->last_name} <br />";
	}

	public function __construct(){
		foreach ($this->dates as $date) {
			$property = $this->{$date};
			$this->{$date} = new dateTime($property);
			$this->{$date} = $this->{$date}->format('d M Y');
		}
	}

}

$db = new PDO('mysql:host=127.0.0.1; dbname=first_pdo', 'root', '');

$requete = $db->query(" SELECT * FROM users");
$requete->setFetchMode(PDO::FETCH_CLASS,'User' );
$resultats = $requete->fetchAll();
var_dump($resultats);
foreach ($resultats as $resultat) {

	echo "{$resultat->created} <br />";
}


?>
