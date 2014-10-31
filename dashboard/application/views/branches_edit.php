<?php
/**
 * @filename: view home
 * Created by PhpStorm.
 * User: LEEYOOL
 * Date: 10/20/14
 * Time: 3:16 PM
 */
?>
<div class="right-bar col-md-9">
    <h2 class="title">Branches</h2>

    <div class="btn-group">
    	<a class="btn btn-default btn-cate"><i class="fa fa-plus-circle"></i> &nbsp;Create new</a>
    </div>

    <br />
    
	<form class="edit-form" role="form" method="<?php echo base_url("branches/edit_do/" . $branch['id']); ?>">
		<div class="form-group">
			<label for="txtEmail" class="control-label">Name:<span class="required">*</span></label>
			<input type="text" name="txtEmail" class="form-control" id="txtEmail" placeholder="Branch name" value="<?php echo $branch['name']; ?>">
		</div>

		<div class="form-group">
			<label for="txtNote" class="control-label">Note:</label>
			<textarea name="txtNote" class="form-control" rows="3" id="txtNote"></textarea>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</form>
</div>