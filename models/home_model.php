<?php 
class home_model extends vendor_frap_model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function getCategory() {        
		$query = "SELECT * FROM category";
		$result = mysqli_query($this->con, $query);
		$result = $result->fetch_all(MYSQLI_ASSOC);
        $records = array_column($result, 'name', 'id');
		return $records;
    }
}
?>