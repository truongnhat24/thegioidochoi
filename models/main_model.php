<?php
class Main_Model
{
	protected $con;
	private static $instance = [];

	protected $table;
	protected function __construct()
	{
		$instanceDB = ConnectDb::getInstance();
		$this->con = $instanceDB->getConnection();
		if (!$this->table)	$this->setTableName();
	}

	public static function getInstance()
	{
		$called_class = get_called_class();
		if (!array_key_exists($called_class, self::$instance)) {
			self::$instance[$called_class] = new $called_class();
		}
		return self::$instance[$called_class];
	}

	public function setTableName($table = null)
	{
		if ($table) {
			$this->table = $table;
		} else {
			$cln = get_class($this);
			$clnf = str_split($cln, strrpos($cln, '_'))[0];
			$this->table = noun_utils::pluralize($clnf);
			/*
			if (strrpos($clnf,"y")) {
				if ((strrpos($clnf,"y") + 1) == strlen($clnf)) {
					$this->table = str_split($clnf, strrpos($clnf, 'y'))[0].'ies'; 
				} 
			} else {
				$this->table = $clnf.'s';
			}
			*/
		}
	}

	public function getTableName()
	{
		return $this->table;
	}

	public function getAllTables()
	{
		$sql = "SHOW TABLES FROM " . DB_NAME;
		$query = mysqli_query($this->con, $sql);
		$result = [];
		if ($query) {
			while ($field = mysqli_fetch_row($query)) {
				array_push($result, $field[0]);
			}
		}
		return $result;
	}

	public function getAllFields($table)
	{
		$sql = "SHOW COLUMNS FROM " . $table;
		$fields = $this->con->query($sql);
		$result = [];
		if ($fields) {
			while ($field = mysqli_fetch_array($fields)) {
				array_push($result, $field['Field']);
			}
		}
		return $result;
	}

	/* CRUD data method */
	public function getAllRecords($fields = '*', $options = null)
	{
		$conditions = '';
		if (isset($options)) {
			$conditions .= ' where ' . $options;
		}
		$query = "SELECT " . $fields . " FROM " . $this->table . $conditions;
		$result = mysqli_query($this->con, $query);
		$result = $result->fetch_all(MYSQLI_ASSOC);
		return $result;
	}

	public function getRecord($id = null, $fields = '*', $options = null)
	{
		$conditions = '';
		if (isset($options['conditions'])) {
			$conditions .= ' and ' . $options['conditions'];
		}
		$query = "SELECT $fields FROM $this->table where id=$id" . $conditions;
		$result = mysqli_query($this->con, $query);
		if ($result) {
			//$record = mysqli_fetch_array($result);
			//$record = mysqli_fetch_row($result);
			$record = mysqli_fetch_assoc($result);
		} else $record = false;
		return $record;
	}

	public function getLastRecord($table)
	{
		$sql = "SELECT * FROM " . $table . " ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($this->con, $sql);
		$record = mysqli_fetch_assoc($result);
		return $record;
	}

	public function delRecord($id = null, $conditions = null)
	{
		if ($conditions)	$conditions = ' and ' . $conditions;
		$query = "DELETE FROM $this->table WHERE id=$id" . $conditions;
		return mysqli_query($this->con, $query);
	}

	public function recordTime($field)
	{
		$fields = $this->getColumnsName();
		$recordTime = "";
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$datetime = date('Y-m-d h:i:s', time());
		if (in_array($field, $fields)) {
			$recordTime .= '"' . $datetime . '"';
		}
		return $recordTime;
	}

	public function getColumnsName()
	{
		$sql = 'DESCRIBE ' . $this->table;
		$result = mysqli_query($this->con, $sql);

		$rows = array();
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row['Field'];
			}
		}

		return $rows;
	}

	public function addRecord($datas)
	{
		global $app;
		$fields = $values = '';
		$i = 0;

		foreach ($datas as $k => $v) {
			if ($i) {
				$fields .= ',';
				$values .= ',';
			}
			$fields .= $k;
			$values .= "'" . $v . "'";
			$i++;
		}

		if ($createdTime = $this->recordTime($app['recordTime']['created'])) {
			$fields .= ',' . $app['recordTime']['created'];
			$values .= ',' . $createdTime;
		}

		$query = "INSERT INTO $this->table ($fields) VALUES ($values)";
		return mysqli_query($this->con, $query);
	}

	public function editRecord($id, $datas)
	{
		global $app;
		$setDatas = '';
		$i = 0;
		foreach ($datas as $k => $v) {
			if ($i) {
				$setDatas .= ",";
			}
			$setDatas .= $k . "='" . $v . "'";
			$i++;
		}

		if ($updatedTime = $this->recordTime($app['recordTime']['updated'])) {
			$setDatas .= ',' . $app['recordTime']['updated'] . '=' . $updatedTime;
		}

		if (gettype($id) == 'array') {
			$id = $id["id"];
		}

		$query = "UPDATE $this->table SET $setDatas WHERE id='$id'";

		return mysqli_query($this->con, $query);
		//$result = mysqli_query($this->con,$query) or die("MySQL error: " . mysqli_error($this->con) . "<hr>\nQuery: $query");
	}

	public static function convertToList($mysqliObject)
	{
		$arrReturn = [];
		while ($row = mysqli_fetch_array($mysqliObject)) {
			$arrReturn[$row['id']] = $row['cat_name'];
		}
		return $arrReturn;
	}
}
