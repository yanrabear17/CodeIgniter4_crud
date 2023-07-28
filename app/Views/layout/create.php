<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php base_url(); ?> css/style.css">
    <title>Create User Page</title>
</head>

<body>
    <div class="main">
        <div class="header">
            <h1>Create User View</h1>
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
                <form action="createuser" method="post">
                    <td><input type="text" name="userName" placeholder="Input Name"></td>
                    <td><input type="text" name="userCourse" placeholder="Input Course"></td>
                    <td><input type="number" name="userBatch" placeholder="Input Batch"></td>
                    <td><input type="text" name="userEmail" placeholder="Input Email"></td>
                    <td><button>Submit</button></td>
                </form>
            </tr>
        </table>
</body>

</html>