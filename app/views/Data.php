<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
</head>
<body>
    
<style>
     table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .edit-btn {
            background-color: #007BFF;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .edit-btn:hover {
            background-color: #0056b3;
        }

        .delete-btn {
            background-color: #FF0000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }
</style>
<table border="1">
    <thead>
            <th>STUDENT ID</th>
            <th>Full Name</th>
            <th>Year Level</th>
            <th>Course</th>
            <th>Controls</th>
        </thead>
        <tbody>
            <?php foreach($info as $for): ?>
        <tr>
            <td><?= $for['studentID']?></td>
            <td><?= $for['Fullname']?></td>
            <td><?= $for['Yearlevel']?></td>
            <td><?= $for['Course']?></td>
            <td><a href="/edit/<?= $for['ID'] ?>" class="edit-button">
        <i class="fas fa-edit"></i> Edit
        </a>  &#160;
        <a href="/delete/<?= $for['ID'] ?>" class="delete-button">
            <i class="fas fa-trash-alt"></i> Delete
        </a>
            </td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>