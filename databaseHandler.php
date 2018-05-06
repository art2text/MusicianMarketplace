<?php

/***
databaseHandler.php: handles all database interaction, login information hidden for public use
***/

class databaseHandler {
	
	private $SERVER_NAME = "***";
	private $USERNAME    = "***";
	private $PASSWORD    = "***";
	private $DATABASE    = "***";

	public $connection = null;

	// construct connection
	public function __construct() {
		$this->connection = new mysqli($this->SERVER_NAME, $this->USERNAME, $this->PASSWORD, $this->DATABASE);

		if ($this->connection->connect_error) {
			echo "failed connection";
		}
	}
	
	// disconnect from database
	public function disconnect() {
		$this->connection->close();
	}

	// run a sql command on the database
	public function runCommand($sql) {
		$result = $this->connection->query($sql);
		return $result;
	}

}

?>