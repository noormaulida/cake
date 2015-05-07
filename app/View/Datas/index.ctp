<h1>Custom Form</h1>
<table>
<?php echo $this->Form->create('Datas', array('type' => 'file')); ?>
	<tr>
		<?php echo $this->Form->input('password', array('type' => 'password'));?>
	</tr>
	<tr>
		<?php echo $this->Form->input('email', array('type' => 'email'));?>
	</tr>
	<tr>
		<?php echo $this->Form->input('choosen', array(
			'options' => array(1, 2, 3, 4, 5),
			'empty' => '(choose one)'
			));?>
		<br />
	</tr>

	<tr>
		<?php echo $this->Form->label('Published'); ?>
	</tr>
	<tr>
		<?php echo $this->Form->checkbox('published', array('value' => 123)); ?>
		<br />
	</tr>
	<tr>
		<?php echo $this->Form->label('Notes'); ?>
	</tr>
	<tr>
		<?php echo $this->Form->textarea('notes', array('escape' => 'false')); ?>
		<br />
	</tr>

	<tr>
		<?php $options = array('M' => 'Male', 'F' => 'Female');
			$attributes = array('legend' => false);
			echo $this->Form->radio('gender', $options, $attributes); ?>
	</tr>

	<tr>
		<?php echo $this->Form->end('Submit');?>
	</tr>
	<br /><br />
	<?php 
	echo $this->Html->tableCells(array(
		array(
			'Jul 7th, 2007',
			array(
				'Best Brownies',
				array('class' => 'highlight')
				),
			'Yes'),
		array('Jun 21st, 2007', 'Smart Cookies', 'Yes'),
		array(
			'Aug 1st, 2006',
			'Anti-Java Cake',
			array('No', array('id' => 'special'))
			),
		));
	?>
</table>