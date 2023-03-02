<?php
global $mediaFiles;
array_push($mediaFiles['css'], "media/css/home.css");
array_push($mediaFiles['css'], LibsREL . 'fontawesome/css/all.css');
//$blog = blog_model::getRecord('*', 'published = 1');
?>
<?php include_once 'views/layout/' . $this->layout . 'header.php'; ?>
<div class="content">
	<h1>Live a balanced life</h1><br />

	<hr>
	
</div>
<?php include_once 'views/layout/' . $this->layout . 'footer.php'; ?>