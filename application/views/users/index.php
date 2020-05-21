<h2><?php echo $title; ?></h2>
<h3><a href="<?php echo site_url('users/create'); ?>">Create</a></h3>

    <table style="width:500px">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php foreach ($user_list as $us): ?>
        <tr>
            <td><?php echo $us['name']; ?></td>
            <td><a href="<?php echo site_url('users/'.$us['id']); ?>">View User</a></td>
        </tr>
        <?php endforeach; ?>
    </table>




