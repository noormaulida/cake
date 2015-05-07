<h1>Posts</h1>
<?php echo $this->Html->link('Add', array('controller' => 'posts', 'action' => 'add')); ?>
<table>
	<tr>
		<td>Id</td>
		<td>Title</td>
		<td>Body</td>
		<td>Action</td>
		<td>Created</td>
		<td>Modified</td>
	</tr>
	<?php foreach ($posts as $key) : ?>
	<tr>
		<td><?php echo $key['Post']['id']; ?></td>
		<td><?php echo $this->Html->link($key['Post']['title'], array('controller' => 'posts', 'action' => 'view', $key['Post']['id'])) ; ?></td>
		<td><?php echo $key['Post']['body']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('controller' => 'posts', 'action' => 'edit', $key['Post']['id'])) . " " . $this->Form->postLink('Delete', array('controller' => 'posts', 'action' => 'delete', $key['Post']['id']), array('confirm' => 'Are you sure?')); ?></td>
		<td><?php echo $key['Post']['created']; ?></td>
		<td><?php echo $key['Post']['modified']; ?></td>
	</tr>
	<?php endforeach; ?>
	<!-- $this->unset($key);-->
</table>