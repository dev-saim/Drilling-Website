<?php
session_start();

$user_id = $_SESSION['admin_name'];

if (!isset($user_id)) {
    header('location:adminlogin.php');
    exit();
}

$conn = mysqli_connect('localhost', 'root', '', 'drill') or die('connection failed');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action == 'delete') {
        $sql = "DELETE FROM form WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'action' => 'delete']);
        } else {
            echo json_encode(['success' => false]);
        }
    } else if ($action == 'complete' || $action == 'pending') {
        $status = $action;
        $sql = "UPDATE form SET status=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si', $status, $id);
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'status' => $status]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

    $conn->close();
    exit();
}

$sql = "SELECT * FROM form ORDER BY dateandtime DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .header {
            background-color: black;
            padding: 30px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header a {
            font-size: 25px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .header button {
            background-color: transparent;
            border:none;
            color: white;
            font-size: 25px;
            cursor: pointer;
            position: relative;
        }

        .logout-box {
            display: none;
            position: absolute;
            right: 45px;
            top: 95px;
            padding: 20px 40px;
            z-index: 1000;
            background-color: black;
            border-radius: 10px;
        }

        .logout-box a {
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .data {
            padding: 20px;
            overflow-x: auto;
            margin: 30px 0px;
        }

        .data h2 {
            text-align: center;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: auto;
            white-space: nowrap;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            white-space: nowrap;
        }

        th {
            background-color: #f2f2f2;
        }

        .action-button {
            padding: 7px 10px;
            margin: 5px;
            border: 1px solid black;
            cursor: pointer;
            color: white;
            background-color: white; 
            color: black;
            border-radius: 5px; 
        }

        .complete {
            border: 1px solid green;
        }

        .pending {
            border: 1px solid red;
        }

        .complete.active {
            background-color: green;
            color: white;
            font-weight: 600;
        }

        .pending.active {
            background-color: red;
            color: white;
            font-weight: 600;
        }

        .download-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .download-btn button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .download-btn button i {
            margin-right: 10px;
        }

        @media (max-width: 700px) {
            .header {
                padding: 20px 30px;
            }

            .logout-box {
                right: 10px;
                top: 70px;
            }

            .header a {
                font-size: 16px;
            }

            .header button {
                font-size: 20px;
            }

            th, td {
                padding: 10px;
                font-size: 7px;
            }

            .action-button {
                padding: 3px 5px;
                font-size: 10px;
            }
        }
    </style>
    <title>Admin Page</title>
</head>
<body>

<div class="header">
    <a href="#">Admin Dashboard</a>
    <button class="btn" onclick="toggleLogoutBox()">
        <i class="fa fa-user" aria-hidden="true"></i>
    </button>
    <div class="logout-box" id="logoutBox">
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="download-btn">
    <button onclick="download()">
        <i class="fa fa-file-pdf" aria-hidden="true"></i> Download PDF
    </button>
</div>

<div class="data">
    <h2>Order's Information</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Well Depth</th>
                <th>Hand Pump</th>
                <th>Concrete Base</th>
                <th>Water Pump</th>
                <th>Solar Option</th>
                <th>Storage Tank</th>
                <th>Water Tank Tower</th>
                <th>Clean Water Tank</th>
                <th>Date and Time</th>
                <th>Status</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            $completeClass = $row["status"] === "complete" ? "active" : "";
            $pendingClass = $row["status"] === "pending" ? "active" : "";
            echo "<tr data-id='".$row["id"]."'>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["address"]."</td>
                    <td>".$row["welldepth"]."</td>
                    <td>".$row["handpump"]."</td>
                    <td>".$row["concretebase"]."</td>
                    <td>".$row["waterpump"]."</td>
                    <td>".$row["solaroption"]."</td>
                    <td>".$row["storagetank"]."</td>
                    <td>".$row["watertanktower"]."</td>
                    <td>".$row["cleanwatertank"]."</td>
                    <td>".$row["dateandtime"]."</td>
                    <td>
                        <button class='action-button complete $completeClass' onclick='updateStatus(" . $row["id"] . ", \"complete\")'>Complete</button>
                        <button class='action-button pending $pendingClass' onclick='updateStatus(" . $row["id"] . ", \"pending\")'>Pending</button>
                        <button class='action-button delete' onclick='updateStatus(" . $row["id"] . ", \"delete\")'>Delete</button>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>

<script>
    function toggleLogoutBox() {
        var logoutBox = document.getElementById('logoutBox');
        if (logoutBox.style.display === 'none' || logoutBox.style.display === '') {
            logoutBox.style.display = 'block';
        } else {
            logoutBox.style.display = 'none';
        }
    }

    function updateStatus(id, action) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    var row = document.querySelector("tr[data-id='" + id + "']");
                    var completeButton = row.querySelector(".complete");
                    var pendingButton = row.querySelector(".pending");

                    if (action === "delete") {
                        row.parentNode.removeChild(row);
                    } else if (action === "complete") {
                        if (completeButton.classList.contains('active')) {
                            completeButton.classList.remove('active');
                        } else {
                            completeButton.classList.add('active');
                            pendingButton.classList.remove('active');
                        }
                    } else if (action === "pending") {
                        if (pendingButton.classList.contains('active')) {
                            pendingButton.classList.remove('active');
                        } else {
                            pendingButton.classList.add('active');
                            completeButton.classList.remove('active');
                        }
                    }
                } else {
                    alert("Failed to update status.");
                }
            }
        };
        xhr.send("id=" + id + "&action=" + action);
    }
</script>

<script>
   const download = () => {
    let printable_area = document.querySelector(".data").innerHTML;
    let style = `
        <style>
            * { font-family: 'Segoe UI'; }
            h1, h2 { text-align: center; font-weight: 400; margin: 0; }
            h2 { margin-bottom: 8px; }
            th { padding: 9px; font-weight: 400; }
            table { width: 100%; margin: 0 auto; border-collapse: collapse; }
            th, td { text-align: center; font-size: 18px; border: 1px solid #a7a7a7; padding: 8px; }
            tr:nth-child(even) { background-color: #f8f8f8; }
            .action-button { padding: 7px 10px; margin: 5px; border: 1px solid black; cursor: pointer; }
            .action-button:nth-child(3) {display:none;}
            .complete { border: 1px solid green; background-color: white; color: black; }
            .pending { border: 1px solid red; background-color: white; color: black; }
            .complete.active { background-color: green; color: white; font-weight: 600; }
            .pending.active { background-color: red; color: white; font-weight: 600; }
        </style>
    `;

    let windowObj = window.open("", "", "width=4000,height=10000");
    windowObj.document.write(style);
    windowObj.document.write(printable_area);
    windowObj.document.close();
    windowObj.print();
}

</script>

</body>
</html>
