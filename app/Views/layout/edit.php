<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">


    <title>Create User Page</title>
</head>

<body>
    <div class="main">
        <div class="header">
            <h1>Edit User View</h1>
        </div>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>Email</th>
                <th>ACTION</th>

            </tr>

            <tr>
                <form action="/codeigniter4-crud/update/<?php echo $findId['id']; ?>" method="post">
                    <td><input type="text" name="userName" value="<?php echo $findId['name']; ?>" placeholder="Input Name"></td>
                    <td><input type="text" name="userCourse" value="<?php echo $findId['course']; ?>" placeholder="Input Course"></td>
                    <td><input type="number" name="userBatch" value="<?php echo $findId['batch']; ?>" placeholder="Input Batch"></td>
                    <td><input type="text" name="userEmail" value="<?php echo $findId['email']; ?>" placeholder="Input Email"></td>
                    <td><button>Submit</button></td>
                </form>
            </tr>
        </table>




</body>

</html>