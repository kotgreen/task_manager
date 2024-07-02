<?php include('db_connect.php'); ?>
<?php include('header.php'); ?>


    <table class="table table-hover" style="width: 900px; margin:auto">
        <thead>
            <th>ID</th>
            <th>Created_at</th>
            <th>Task</th>
            <th>Archive</th>
            <th>Delete</th>
        </thead>
        <?php
        while ($row = $query->fetch()) {
        ?>
            <tbody>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td><?= $row['task'] ?></td>
                    <td>arhivate</td>
                    <td><a href="delete_task.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
    <div class="input-group mb-3">
        <form action="new_task.php" style="margin:auto" method="POST">
            <input type="text" style="width: 400px" placeholder="write a task" name="add_task">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>