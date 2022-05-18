
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/become.css">
    <title>Become a tutor</title>
</head>
<body>
    
    <div class="header">
        <div class="navbar">
            <div class="logo">
                    <img src="../imgs/TEXT-LOGO-l2-Small.png" alt="Usteaps logo">
            </div>
            <div class="menu">
               <ul>
                <li><a href="../newdesign/design.php">Home</a></li>
                <li><a href="../main/about.php">About us</a></li>
                <li><a href="../main/contact.php">Contact a Tutor</a></li>
                <li> | </li>
                <li id="log-out"><a href="../main/logout.php">Logout</a></li>
               </ul>
            </div>

            <form action="" method="POST">
                <div class="application-container">
                    <h2>Tutor Application</h2>
                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <input type="text" name="idnumber" placeholder="ID Number" required>
                    <input type="password" name="pass" placeholder="Password" required>
                    <input type="text" name="yearLvl" placeholder="Year Level" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="contactNo" placeholder="Contact Number" required>
                    <input type="text" name="subject" placeholder="Subject To Teach" required>
                    <select id="course-become">
                        <option value="">Select Course</option>
                        <option value="it">BSIT</option>
                        <option value="tcm">BSTCM</option>
                        <option value="cpe">BSCPE</option>
                    </select>
                    <a href="#">
                        <button class="button-become" type="Submit" name="login">REGISTER</button>
                    </a>
                </div>
            </form>
    

</body>
</html>