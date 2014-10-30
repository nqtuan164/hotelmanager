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
    <table class="table table-hover branches-table">
		<tr class="table-header">
			<th>#</th>
			<th>Branch name</th>
			<th>Activation</th>
			<th>Note</th>
			<th>Created date</th>
			<th>Updated date</th>
			<th>Action</th>
		</tr>
		<?php 
			foreach ($branches as $key => $value) :
				?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['activation'] == 1 ? 'Active' : 'Deactived'; ?></td>
					<td><?php echo $value['note']; ?></td>
					<td>
						<span class="data-tooltip" data-toggle="tooltip" data-placement="top" title="<?php echo_format_date($value['created_date'], 'd-m-Y H:i:s'); ?>">
							<?php echo_format_date($value['created_date'], 'd-m-Y'); ?>
						</span>
					</td>
					<td>
						<span class="data-tooltip" data-toggle="tooltip" data-placement="top" title="<?php echo_format_date($value['updated_date'], 'd-m-Y H:i:s'); ?>">
							<?php echo_format_date($value['updated_date'], 'd-m-Y'); ?>
						</span>
					</td>
					<td>
						<a class="btn-edit" href="" title=""><i class="fa fa-pencil"></i></a>
						<a class="btn-remove" href="" title=""><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php 
			endforeach;
		?>
    </table>
</div>