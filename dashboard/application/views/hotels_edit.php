<div class="right-bar col-md-9">
    <h2 class="title">Hotels</h2>

    <div class="btn-group">
    	<a class="btn btn-default btn-cate"><i class="fa fa-plus-circle"></i> &nbsp;Create new</a>
    </div>

    <br />
    
	<form class="edit-form" role="form" method="<?php echo base_url("hotels/edit_do/" . $hotel['id']); ?>">
		<div class="form-group">
			<label for="txtName" class="control-label">Name:<span class="required">*</span></label>
			<input type="text" name="txtName" class="form-control" id="txtName" placeholder="Hotel name" value="<?php echo $hotel['name']; ?>">
		</div>
		<div class="form-group">
			<label for="txtAddress" class="control-label">Address:<span class="required">*</span></label>
			<input type="text" name="txtAddress" class="form-control" id="txtAddress" placeholder="Hotel address" value="<?php echo $hotel['address']; ?>">
		</div>
		<div class="form-group">
			<label for="txtNameb" class="control-label">Name Branches:<span class="required">*</span></label>
			<select class="form-control">
				<?php foreach ($branches as $key => $value) : ?>
					<option>
						<?php echo $value['name']; ?>
					</option>
				<?php endforeach; ?>
			</select>
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