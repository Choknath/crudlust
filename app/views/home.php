<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Student Information</title>
 
    <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;

        }
     

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #007BFF;
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            display: block;
            width: 100%;
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
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
<body>
         
<h1>Student Information</h1>
    <form action="/<?=(isset($edit['ID']))? "submitedit/" . $edit['ID']: "submit" ?>" method="post">
        <label>StudentID:</label>
        <input type="text"  name="studentID" required value="<?=(isset($edit['ID']))? $edit['studentID']: ""?>">
        <label>Fullname:</label>
        <input type="text" name="Fullname" required value="<?=(isset($edit['ID']))? $edit['Fullname']: ""?>">
        <label >Yearlevel:</label>
        <input type="text" name="Yearlevel" required value="<?=(isset($edit['ID']))? $edit['Yearlevel']: ""?>">
        <label >Course:</label>
        <input type="text" name="Course" required value="<?=(isset($edit['ID']))? $edit['Course']: ""?>">
        <br>
        <br>
        <input class="btn" type="submit" value="<?=(isset($edit['ID']))? "Update" : "Submit" ?>"> 
    </form>

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