<?php
class products_controller extends vendor_main_controller
{
	protected like_model $like;
	protected comment_model $comment;
	protected product_model $product;
	public function __construct()
	{
		$this->product = product_model::getInstance();
		$this->comment = comment_model::getInstance();
		$this->like = like_model::getInstance();
		parent::__construct();
	}

	public function index()
	{
		if (isset($_SESSION['auth'])) {
			$id = $_SESSION['auth']['id'];
			$fields = "id, title, category, image, slug";
			$record = $this->product->getRecordByUserId($id, $fields);
			$this->setProperty('records', $record);
			$this->checkAuth();
		} else {
			header("Location: " . html_helpers::url(array('ctl' => 'users', 'act' => 'login')));
		}
	}

	public function create()
	{
		$user = user_model::getInstance();
		$user->createTable();

		$this->products = $user->getAllTables();
		$this->display();
	}

	public function getProductData($id) 
	{
		$record = $this->product->getRecord($id);
		$this->setProperty('records', $record);
		return $record;
	}

	public function getComment($id) 
	{
		$record = $this->comment->getRecordUser($fields = '*', "product_id =". $id);
		$this->setProperty('commentRecords', $record);
		return $record;
	}

	public function getLike($id) {
		$record = $this->like->getLikedRecords($_SESSION['auth']['id'], $id, "type_id", "type = 'comment'");
		$this->setProperty('likeRecords', $record);
		$liked = array();
		foreach ($record as $parentArray) {
			foreach ($parentArray as $k=>$v) {
				// array_push($liked, $v);
				$liked[]=$v;
			}
		}
		return $liked;
	}

	public function view($id)
	{
		if(isset($_SESSION['auth'])) 
		{
			$this->getComment($id);
			$this->getProductData($id);
			$this->likeRecords=$this->getLike($id);
			$this->display();
		} else {
            header( "Location: ".html_helpers::url(array('ctl'=>'users', 'act'=>'login')));
		}

	}

	public function add()
	{
		$this->display();
	}

	public function edit($id)
	{
		$record = $this->getProductData($id);
		if($this->checkCurrentAuth($record['user_id'])) $this->display();		
	}

	public function del($id) 
	{
		$record = $this->product->getRecord($id);
		if(file_exists(RootURI."/media/upload/" .$this->controller.'/'.$record['image']))
			unlink(RootURI."/media/upload/" .$this->controller.'/'.$record['image']);
			
		$this->product->delRecord($id);
		header( "Location: ".html_helpers::url(array('ctl'=>'products')));
	}

	public function createSubmit()
	{
		if (isset($_POST['add_product'])) {
			$id = $_SESSION['auth']['id'];
			$productData = $_POST['data'][$this->controller];
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$slug = html_helpers::convert_name($productData['title']." ".date("h:i:s", time())." ". strval((rand(0, 10000))));
			$productData['slug'] = $slug;
			$productData['user_id'] = $id;
			if (!empty($productData['title'])) {
				if (isset($_FILES) and $_FILES["image"]["name"]) {
					$productData['image'] = SimpleImage_Component::uploadImg($_FILES, $this->controller);
				}
				if ($this->product->addRecord($productData)) {
					header("Location: " . html_helpers::url(array('ctl' => 'products')));
				}
			}
		}
	}

	public function editSubmit($id)
	{
		$records = $this->getData($_SESSION['auth']['id'], 'edit');
		$this->setProperty('records',$records);
		
		if (isset($_POST['edit_product'])) {
			$productData = $_POST['data'][$this->controller];
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$slug = html_helpers::convert_name($productData['title']." ".date("h:i:s", time())." ". strval((rand(0, 10000))));
			$productData['slug'] = $slug;
			if (!empty($productData['title'])) {
				if (isset($_FILES) and $_FILES["image"]["name"]) {
					if(file_exists(UploadREL .$this->controller.'/'.$records['image']))
					unlink(UploadREL .$this->controller.'/'.$records['image']);
					$productData['image'] = SimpleImage_Component::uploadImg($_FILES, $this->controller);
				}				
				if ($this->product->editRecord($id, $productData)) {
					header("Location: " . html_helpers::url(array('ctl' => 'products')));
				}
			}
		}
	}
}