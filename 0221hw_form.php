<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
    body {
        background-color: #fbffec;
        color: #f07b15;
        font-size: 12px;
        font-style: inherit;
        text-align: center;
        margin: 20px auto;
        width: 80%;
        border: 1px;
    }

    h1 {
        color: rgb(248, 177, 26);
        font-size: 40px;
        text-align: center;
        font-family: serif;
    }

    h3 {
        color: rgb(252, 189, 126);
        font-size: 18px;
        text-align: center;
        font-family: serif;
        font-style: italic;
    }

    hr {
        margin: 20px auto;
        height: 1px;
        width: 100%;
        border: none;
        background-color: #f88c80;
    }

    .register-form {
        width: 300px;
        /* Chiều rộng của form */
        padding: 20px;
        /* Padding xung quanh form */
        background-color: rgb(255, 247, 227);
        /* Màu nền trắng */
        border-radius: 8px;
        /* Bo góc cho form */
        box-shadow: 0 4px 8px rgba(143, 141, 141, 0.1);
        /* Hiệu ứng bóng cho form */
        margin: 20px auto;
        /* Canh giữa form */
    }

    .register-form label {
        display: block;
        font-weight: bold;
        /* Đậm cho các nhãn */
        margin-bottom: 5px;
    }

    .register-form input,
    .register-form textarea {
        width: 100%;
        /* Chiếm toàn bộ chiều rộng của form */
        padding: 8px;
        margin-bottom: 12px;
        /* Khoảng cách giữa các phần tử */
        border: 1px solid #ccc;
        /* Viền mờ cho các trường */
        border-radius: 4px;
        /* Bo góc cho các trường */
        box-sizing: border-box;
        /* Đảm bảo không bị tràn ra ngoài */
    }

    .register-form input[type="submit"],
    .register-form input[type="reset"] {
        background-color: rgb(252, 148, 2);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 16px;
        border-radius: 4px;
        width: 100%;
        /* Chiều rộng của nút */
    }

    .register-form input[type="submit"]:hover,
    .register-form input[type="reset"]:hover {
        background-color: rgb(213, 35, 35);
    }

    .register-form .gender-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 16px;
        align-items: center;
    }

    .register-form .gender-group label {
        font-weight: normal;
        display: inline-block;
        padding-left: 5px;
        cursor: pointer;
        margin-left: 10px;
        margin-right: 20px;
    }

    .register-form textarea {
        resize: vertical;
    }

    .register-form .form-group {
        margin-bottom: 16px;
    }
    </style>
</head>

<body>
    <h1>Registration Page</h1>
    <h3>Secure Your Spot – Register for the Drink Party Now!</h3>
    <hr>
    <h2>
        <center>Description:</center>
    </h2>
    <p>Ready to join the fun? Sign up for the next Drink Party to secure your spot! Fill in the registration form below
        to let us know you’re coming. Don’t miss out on a chance to enjoy great drinks, fun activities, and meet new
        people!
    </p>
    <hr>
    <h2>Form Fields:</h2>
    <form action="0221hw_info.php" method="post" class="register-form">
        <div class="form-group">
            <label for="uName">Please enter your name:</label>
            <input type="text" name="uName" id="uName" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="uEmail">Please enter your email:</label>
            <input type="email" name="uEmail" id="uEmail" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="uPhone">Please enter your phone number:</label>
            <input type="tel" name="uPhone" id="uPhone" placeholder="Phone Number">
        </div>

        <div class="form-group">
            <label for="uDOB">Please enter your date of birth:</label>
            <input type="date" name="uDOB" id="uDOB" placeholder="Date of Birth">
        </div>

        <div class="form-group">
            <label for="uAge">Please enter your age:</label>
            <input type="number" name="uAge" id="uAge" placeholder="Age" min="0" max="80">
        </div>

        <div class="form-group gender-group">
            <label for="uGender">Please enter your gender:</label>
            Female <input type="radio" name="uGender" value="Female">
            Male <input type="radio" name="uGender" value="Male">
        </div>

        <div class="form-group">
            <label for="uRange">How do you like this page:</label>
            <input type="range" name="uRange" min="0" max="10">
        </div>

        <div class="form-group">
            <label for="uComment">Please write down your special requests or notes:</label>
            <textarea cols="10" rows="3" name="uComment" id="uComment"
                placeholder="Special Requests or Notes"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </div>
    </form>

</body>


</html>