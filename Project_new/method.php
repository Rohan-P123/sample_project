<!DOCTYPE html>
<html>
<head>
    <title>Startup Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        background: linear-gradient(96deg,#191029 2.6%,#564f66 55.92%,#1d132d 96.53%);
            margin-top: 2rem;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #007BFF;
        }

        .display-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .display-data {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
        .navbar ul{
            height: 50px;
        }
        .navbar ul{
            list-style-type: none;
            background-color: hsl(0, 0%, 25%); 
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0px;
            justify-content: left;
            overflow: hidden;
        }
        .navbar ul a{
            /* margin-top: 10px */
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            text-align: center;
        }
        .navbar a:hover{
            transition-duration: 700ms;
            transition-delay: 0.1s;
            border-radius: 10% 10% 10% 10%;
            background-color: hsl(0, 0%, 10%);
        }
        .navbar li{
            float: left;
        }
        .layout{
            color: white; 
            display: block;
            justify-content: space-evenly;
        }
            </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contacts.html">Contacts</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Startup Information</h2>

        <div class="display-group">
            <label>Name:</label>
            <div class="display-data"> <?php echo $_POST["name"]; ?> </div>
        </div>

        <div class="display-group">
            <label>Age:</label>
            <div class="display-data">30</div>
        </div>

        <div class="display-group">
            <label>Qualifications:</label>
            <div class="display-data">Bachelor's Degree</div>
        </div>

        <div class="display-group">
            <label>Profession:</label>
            <div class="display-data">Software Developer</div>
        </div>

        <div class="display-group">
            <label>Email:</label>
            <div class="display-data">john@example.com</div>
        </div>

        <div class="display-group">
            <label>Mobile:</label>
            <div class="display-data">123-456-7890</div>
        </div>

        <div class="display-group">
            <label>Aadhar:</label>
            <div class="display-data">1234-5678-9012</div>
        </div>

        <div class="display-group">
            <label>PAN:</label>
            <div class="display-data">ABCDE1234F</div>
        </div>

        <div class="display-group">
            <label>Brief Description of Startup:</label>
            <div class="display-data">A tech startup specializing in web development.</div>
        </div>

        <div class="display-group">
            <label>Company Size:</label>
            <div class="display-data">10 employees</div>
        </div>

        <div class="display-group">
            <label>Target Audience:</label>
            <div class="display-data">Small businesses and startups</div>
        </div>

        <div class="display-group">
            <label>Reason for Starting:</label>
            <div class="display-data">Passion for innovation and entrepreneurship.</div>
        </div>

        <div class="display-group">
            <label>Equity:</label>
            <div class="display-data">50%</div>
        </div>

        <div class="display-group">
            <label>Budget:</label>
            <div class="display-data">$100,000</div>
        </div>

        <div class="display-group">
            <label>Income:</label>
            <div class="display-data">$50,000 per month</div>
        </div>

        <div class="display-group">
            <label>Startup Level:</label>
            <div class="display-data">Early-stage</div>
        </div>
    </div>
</body>
</html>