<div class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <a href="<?php setcookie('userid',null,time()-24*60*60); header('location:index.php');?>" class="btn btn-primary">OK</a>
  </div>
</div>
<!--<?php 
	//return to singin page
	setcookie('userid',null,time()-24*60*60); 
	header('location:index.php');
?>-->