<?php if (isset($first_name)) echo $first_name; ?><br>
<?php if (isset($last_name)) echo $last_name; ?><br>
<?php if (isset($role)) echo $role; ?><br>
<?php echo validation_errors(); ?>
<form action="adduser" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name:  <input type="text" name="last_name"><br>
    Role: <select name="role">
        <option value="site_manager">Site Manager</option>
        <option value="chief_head">Chief Head</option>
        <option value="coordinator">Coordinator</option>
        <option value="instructor">Instructor</option>
    </select>
    <br>
    <input type="submit">
</form>