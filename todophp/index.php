<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2> My TODO List</h2>
    <div class=" main">
        <div class="input">
            <form action ="insert.php" method ="POST">
                 <input type="text" name="lis" placeholder="Enter Your Task "></input>
                 <button>ADD</button>
            </form>
           
        </div>
    </div>

<table>
    <tbody>
        <tr>
            <td> coding</td>
            <td> <button class="delete"> Delete</button></td>
            <td><button class="update">Update</button></td>
        </tr>
    </tbody>


</table>

    
</body>
</html>