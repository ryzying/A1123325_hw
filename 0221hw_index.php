<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Department Activity!</title>
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

    hr {
        margin: 20px auto;
        height: 1px;
        width: 100%;
        border: none;
        background-color: #f88c80;
    }

    ul {
        list-style-type: none;
        /* Loại bỏ dấu chấm */
        padding-left: 0;
        /* Loại bỏ khoảng cách bên trái */
    }

    .img-container {
        display: flex;
        /*kích hoạt flexbox*/
        justify-content: center;
        /*canh giữa*/
        margin-top: 20px;
        gap: 10px;
        /*khoảng cách giữa các hình*/

    }

    .img-container img {
        display: inline-block;
        margin: 0 10px;
        width: 30%;
        border-radius: 5px;
        object-fit: cover;
    }

    .register-btn {
        background: linear-gradient(to right, rgb(255, 105, 105), rgb(255, 246, 67));
        color: white;
        padding: 14px 28px;
        font-size: 15px;
        font-family: 'Times New Roman', Times, serif;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .register-btn::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background: #e0af0b;
        transition: all 0.6s ease;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        opacity: 0;
    }

    .register-btn:hover::before {
        width: 100%;
        height: 100%;
        opacity: 1;
    }
    </style>
</head>

<body>
    <div class="content">
        <h1>Faculty Drink Party & Activities Hub</h1>
        <hr>
        <h2>
            <center>Join the Ultimate Faculty Drink Party & Explore Our Activities!</center>
        </h2>
        <p>
            <center>Welcome to the Faculty Activity Hub! This is where students can explore upcoming faculty events,
                celebrate social
                moments, and make lasting connections. Our flagship event is the Drink Party – an evening filled with
                great beverages,
                fun activities, and opportunities to mingle with faculty and fellow students.

                This site will serve as your guide to all things related to our faculty's social events, providing all
                the details you
                need to be part of our vibrant community. Whether you love coffee, tea, mocktails, or juice, there’s
                something for
                everyone!</center>
        </p>
        <hr>
        <h2>
            <center>Upcoming Drink Party!</center>
        </h2>
        <ul>
            <li>&#x1F4C5; <i>Date & Time: 2025/03/08 | 7:00 P.M</i></li>
            <li>&#x1F4CD; <i>Venue: National University of Kaohsiung</i></li>
            <li>&#10004; <i>Drinks Available: Coffee, Tea, Juice, Mocktails, and more!</i></li>
        </ul>
        <hr>
        <h2>
            <center>Events Highlights:</center>
        </h2>

        <div class="img-container">
            <img src="./img/1 (1).jpg" width="100%">
            <img src="./img/1 (3).jpg" width="100%">
            <img src="./img/1 (4).jpg" width="100%">
        </div>

        <br />
        <hr>

        <form action="0221hw_form.php" method="post">
            <button class="register-btn" type="submit">Register Now!</button>
        </form>


</body>

</html>