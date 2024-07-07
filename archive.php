<?php include("header.php"); ?>
<?php include("db_connect.php"); ?>

<table class="table table-hover" style="width: 900px; margin:auto">
    <thead>
        <th>ID</th>
        <th>Created_at</th>
        <th>Task</th>
        <th>End date</th>
        <th>Delete</th>
    </thead>
    <?php
    $sql = "SELECT * FROM `tasks` WHERE `done` = '1'";
    $query = $pdo->query($sql);
    while ($row = $query->fetch()) {
    ?>
        <tbody>
            <tr>
                <td width="20"><?= $row['id'] ?></td>
                <td width="120"><?= $row['created_at'] ?></td>
                <td><?= $row['task'] ?></td>
                <td width="100"><?= $row['end_date'] ?></td>
                <td width="20"><a href="delete_task.php?id=<?= $row['id'] ?>&page=archive"><button type="button" class="my_btn" style="color: white; background-color: #dc3545;">Delete</button></a></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>