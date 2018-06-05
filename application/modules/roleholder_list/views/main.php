
<a href="add"><button type="button" class="btn btn-primary" >Add Role</button></a>
<h1>Roles List</h1>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>


<table>
    <tr>
        <th>Role</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
    </tr>
    <?php foreach ($query->result() as $row) { ?>
        <tr>
            <td><?php echo $row->roleholder_role ?></td>
            <td><?php echo $row->roleholder_firstname ?></td>
            <td><?php echo $row->roleholder_lastname ?> </td>
            <td>
                <a href="deleteuser/<?php echo $row->roleholder_id ?>">Delete</a>
                <a href="manageuser/<?php echo $row->roleholder_id ?>">Edit </a>
            </td>

        </tr>
    <?php } ?>
</table>