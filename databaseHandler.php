<?php

/***
databaseHandler.php: handles all database call executions
***/

class databaseHandler {
	
	// scrubbed login information
	private $SERVER_NAME = "***";
	private $USERNAME    = "***";
	private $PASSWORD    = "***";
	private $DATABASE    = "***";

	public $connection = null;

	// create database connection
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

	// run a sql command
	public function runCommand($sql) {
		$result = $this->connection->query($sql);
		return $result;
	}

}

?>