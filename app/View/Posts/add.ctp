<h1>Add post</h1>
<?php 
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body');
	echo $this->Form->end('Save');
?>