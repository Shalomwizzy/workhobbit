<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Work Hobbit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <style>

        /* Add your custom CSS styles here */
        .welcome-email {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: black;
            color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-heading {
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .welcome-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .welcome-logo img {
            max-width: 100%; /* Adjust the size as needed */
            max-height: 50px; /* Adjust the size as needed */
            height: auto;
        }

        .logo-text {
            font-size: 20px;
            font-weight: bold;
            margin-left: 10px; /* Add margin for spacing */
        }

        .welcome-text {
            font-size: 16px;
            line-height: 1.5;
        }

        .signature {
            font-style: italic;
        }

        .mail-social-media{
            background-color: #240046;
            color: white !important;
            padding: 8px;
            text-align: center;
           
        }

        .mail-social-media a{
            text-decoration: none;
            color: white !important;
            padding: 10px;
            font-size: 16px;
        }

        .mail-social-media i{
        font-size: 18px;
      
        }



        .mail-social-media .mail-facebook{
        color: blue;
      
        }

        .mail-social-media .mail-instagram{
            color: #f09433;
        }

        .mail-social-media .mail-twitter{
           color: black !important;
        }

        .mail-social-media .mail-whatsapp{
        color: green !important;
        }

        .customer-service{
          font-size: 14px;
          font-family: Arial, Helvetica, sans-serif;
        }

        .customer-service a{
            text-decoration: underline !important;
            color: blue !important;
        }

        .office-address{
            font-size: 14px;
          font-family: Arial, Helvetica, sans-serif; 
        }


    </style>
</head>
<body>
    <div class="welcome-email">
        <div class="welcome-logo">
            <img src="{{ asset('images/workhobbit2_081431.jpg') }}" width="90" alt="Amala 247 Logo" class="img-fluid">
        </div>
        <p class="welcome-text">Hello {{ $user['username'] }}!</p>
        <strong class="welcome-heading">Welcome to Work Hobbit!</strong>
        <p class="welcome-text">Thank you for registering on Work Hobbit, your premier platform for remote job opportunities.</p>
        <p class="welcome-text">To get started, submit your application for the positions that interest you. Our team will review your application and reach out if there's a match.</p>
        <p class="welcome-text">If you have any questions or need assistance, feel free to contact our support team. We're here to help!</p>
        <p class="welcome-text">We're excited to have you join the Work Hobbit community!</p>
        <p class="welcome-text">Kind regards,</p>
        <p class="welcome-text signature">Work Hobbit International Team</p>

        <div class="mail-social-media">  
            <p>Find us on</p>
            <div>
             {{-- <a href="">  <i class="fa-brands fa-facebook mail-facebook"></i> </a> --}}
             <a href="">  <i class="fa-brands fa-instagram mail-instagram"></i></a>
             <a href="#"><i class="fab fa-linkedin-in mail-instagram"></i></a>
             <!-- <a href="">  <i class="fa-brands fa-x-twitter mail-twitter"></i></a>
             <a href="">  <i class="fa-brands fa-whatsapp mail-whatsapp"></i></a> -->
            </div>
    
            <div class="copyright">
                <h6>&copy; 2024 WorkHobbit, All rights reserved.</h6>
            </div>
        </div>
        
    </div>

   

 
    <script src="https://kit.fontawesome.com/cc71075486.js" crossorigin="anonymous"></script>
</body>
</html>