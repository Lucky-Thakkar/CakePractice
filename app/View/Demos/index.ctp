<br/>
<br/>
<div >
	<div>
		
		<?php
			foreach ($demos as $p) {
				echo "<div>";
					echo "<span style='color:#979797'> ".$p['Demo']['id']." &nbsp;&nbsp; ".$p['Demo']['counter']."</span>";		
					
				echo "</div>";
				echo $this->Html->link('Edit Post',array('controller' => 'demos', 'action' => 'edit', $p['Demo']['id'])); 
				echo $this->Html->link('Delete',array('controller' => 'demos', 'action' => 'delete_id',$p['Demo']['id']));
			}
			echo $this->Html->link('Add Post',array('controller' => 'demos', 'action' => 'add'));
		?>
	</div>
</div>