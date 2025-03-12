 <?php
include "connect.php";

if(!isset($_SESSION['user'])){
    header("location: dash.php");
}
$email = $_SESSION['user'];
echo "email";



$sql = "SELECT * FROM USERS WHERE email = '$email'";
$results = $conn->query($sql);
$user = $result->fetch_assoc();
$name = $user["username"];
echo "$name";

$conn->closed();




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Side menu starts here -->
    <div class="sidebar">
        <div class="logo">
            <ul class="menu">
                <li class="activee">
                    <a href="" >
                        <i class='bx bxs-dashboard'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="profile.html">
                        <i class='bx bxs-user'></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-calendar'></i>
                        <span>statistics</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-conversation'></i>
                        <span>Overview</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-calendar'></i>
                        <span>Careers</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-user-check'></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="logout.php">
                        <i class='bx bxs-dashboard'></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Side menu ends here -->

    
    <!-- Main Content Starts Here -->

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                
                    <input type="text" placeholder="search">
                </div>
                <img src="/images/8.jpg" alt="">
            </div>
        </div>
        <!-- Card-content starts here -->
         <div class="card--container">
            <h3 class="main-title">Today's data</h3>
            <div class="card--wrapper">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Ticket Booking</span>
                            <span class="amount--value">
                                12000Fcfa
                            </span>
                            
                        </div>
                        <span class="card-details">**** **** **** 3434</span>
                    </div>
                </div>



                <div class="payment--card light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Hotel Booking</span>
                            <span class="amount--value">
                                42000Fcfa
                            </span>
                            
                        </div>
                        <span class="card-details">**** **** **** 3434</span>
                    </div>
                </div>



                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Flight Booking</span>
                            <span class="amount--value">
                                920000Fcfa
                            </span>
                            
                        </div>
                        <span class="card-details">**** **** **** 3434</span>
                    </div>
                </div>



                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Railway Booking</span>
                            <span class="amount--value">
                                62000Fcfa
                            </span>
                            
                        </div>
                        <span class="card-details">**** **** **** 3434</span>
                    </div>
                </div>
            </div>
         </div>
        <!-- Card-content ends here -->
         <div class="tabular-wrapper">
            <h3 class="main-title">Finance data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <td>Date</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>amount</td>
                            <td>Location</td>
                            <td>Destination</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>


                        <tbody>
                            <tr>
                                <td>2023-05-01</td>
                                <td>Labako Ashly</td>
                                <td>Bus Booking</td>
                                <td>52000</td>
                                <td>Bamenda</td>
                                <td>Limbe</td>
                                <td class="status-done">Done</td>
                                
                                <td><button>Edit</button></td>
                            </tr>

                            <tr>
                                <td>2023-05-01</td>
                                <td>Telrah Neba</td>
                                <td>Ticket Booking</td>
                                <td>52000</td>
                                <td>Bamenda</td>
                                <td>Douala</td>
                                <td class="status">pending</td>
                                
                                <td><button>Edit</button></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8">Total: 24000FCFS</td>
                            </tr>
                        </tfoot>
                    </thead>
                </table>
            </div>
         </div>
    </div>
    <!-- Main Content ends Here -->
</body>
</html>