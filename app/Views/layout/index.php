<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php base_url(); ?>css/style.css">
    <title>List View Page</title>
</head>

<body>
    <div class="main">
        <div class="header">
            <h1>List User</h1>
            <a href="create"><button>Create</button></a>
        </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>Email</th>
                <th>Date</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>

            <?php foreach ($getData as $row) : ?>
                <tr>

                    <td><?= $row['id'] ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td><?php echo $row['batch']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['date']; ?></td>

                    <form action="edit/<?php echo $row['id']; ?>">
                        <td><button>Edit</button></td>
                    </form>
                    <form action="deleteuser/<?php echo $row['id']; ?>" method="post">
                        <td><button>Delete</button></td>
                    </form>
                </tr>
            <?php endforeach ?>
        </table>

    </div>
</body>

</html>