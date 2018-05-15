<h1> Manage Class Page</h1>

<?php $create_item_url = base_url() . "class_list/create"; ?>
<p style="margin-top: 30px;">
    <a href="<?= $create_item_url ?>"><button type="button" action="" class="btn btn-primary">Add New Class</button></a>
</p>
<table class="table table-striped table-bordered">
    <tr>
        <td>Class Name</td>
        <td>Class Price</td>
        <td>Class Description</td>
        <td>is Approved?</td>
    </tr>
</table>