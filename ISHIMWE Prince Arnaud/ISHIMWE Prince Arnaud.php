<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body {
                color: white;
                background: black;
            }
            th, td {
                border: 2px solid white;
                border-spacing: 30px;
                width: 50%;
                height: 50px;
            }

            h1 {
                text-align: center;
            }

            td {
                text-align: center;
            }

            table {
                position: relative;
                left: 380px
            }

            tr:hover {
                background: #ccc;
                color: blue;
                border: 2px solid blue;
            }
        </style>
    </head>
<body>
    <h1>Your input data</h1>
    <table>
    <tr>
    <th>First name</th>
    <td><?php echo htmlspecialchars($_POST["fname"]); ?></td>
    </tr>
    <tr>
    <th>Second name</th>
    <td><?php echo htmlspecialchars($_POST["lname"]); ?></td>
    </tr>
    <tr>
    <th>Gender</th>
    <td><?php echo htmlspecialchars($_POST["gender"]); ?></td>
    </tr>
    <tr>
    <th>E-mail</th>
    <td><?php echo htmlspecialchars($_POST["email"]); ?></td>
    </tr>
    <tr>
    <th>Grade</th>
    <td><?php echo htmlspecialchars($_POST["grade"]); ?></td>
    </tr>
    <tr>
    <th>Telephone number</th>
    <td><?php echo htmlspecialchars($_POST["phone"]); ?></td>
    </tr>
    <tr>
    <th>Date of birth</th>
    <td><?php echo htmlspecialchars($_POST["birth"]); ?></td>
    </tr>
    <tr>
    <th>Date of departure</th>
    <td><?php echo htmlspecialchars($_POST["departure"]); ?></td>
    </tr>
    <tr>
    <th>Time of departure</th>
    <td><?php echo htmlspecialchars($_POST["time"]); ?></td>
    </tr>
    <tr>
    <th>Basic knowledge</th>
    <td><?php echo isset($_POST["knowledge"]); ?></td>
    </tr>
    <tr>
    <th>Level of success</th>
    <td><?php echo htmlspecialchars($_POST["success"]); ?></td>
    </tr>
    <tr>
    <th>Username</th>
    <td><?php echo htmlspecialchars($_POST["user"]); ?></td>
    </tr>
    <tr>
    <th>Password</th>
    <td><?php echo htmlspecialchars($_POST["password"]); ?></td>
    </tr>
    <tr>
    <th>Your lesson</th>
    <td><?php echo htmlspecialchars($_POST["study"]); ?></td>
    </tr>
    <tr>
    <th>CV</th>
    <td><?php echo htmlspecialchars($_POST["file"]); ?></td>
    </tr>
    <tr>
    <th>Comments</th>
    <td><?php echo htmlspecialchars($_POST["comment"]); ?></td>
    </tr>
    </table>
</body>
</html>
