<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Card</title>
    <style>
        .student_card {
            width: 360px;
            /* height: 308px; */
            border-radius: 8px;
            overflow: hidden;
            margin: 10px auto;
            /* box-shadow: 2px 2px 16px 2px #000; */
            border: 1px solid #000;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            margin: 0;
            padding: 0;
        }

        .data-item {
            font-family: sans-serif;
            font-size: small;
            padding: 4px 0;
        }

        .sign-data-item {
            font-size: small;
            font-family: sans-serif;
        }

        .student_card_header {
            position: relative;
            height: 100px;
            display: block;
            flex-direction: row;
            padding: 8px 8px 0 8px;
            z-index: 1000;
        }

        .institute_stamp img {
            width: 100px;
            height: auto;
        }

        .institute_info {
            position: absolute;
            top: 10px;
            left: 110px;
            text-align: center;
            /* width: 100%; */
            font-family: sans-serif;
        }

        .student_card_body {
            padding: 8px 8px 0 8px;
        }

        .id-card-row {
            display: flex;
            justify-content: space-between;
        }

        .id-card-col {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .student_image {
            position: relative;
            width: 100px;
            height: auto;
            padding: 4px;
            background-color: white;
            border: 1px solid white;
            border-radius: 8px;
            text-align: center;
        }

        .student_image img {
            height: auto;
            width: 100%;
            border-radius: 8px;
        }

        .institute_admin_sign,
        .student_sign {
            width: 30%;
            height: auto;
            display: flex;
            flex-direction: column;
            text-align: center;
            object-fit: cover;
        }

        .institute_admin_sign img,
        .student_sign img {
            width: 50%;
            height: auto;
            margin: 0 auto;
        }

        .name_sign_divider {
            margin: 2px 0 2px 0;
        }

        .student_card_footer {
            padding: 0 8px 8px 8px;
        }


        @media only screen and (max-width: 780px) {
            .student-info-dtl {
                flex-direction: row !important;
            }

            .student_card_footer .id-card-row {
                flex-direction: row !important;
            }
        }
    </style>
</head>

<body>
    <div class="id-card-row">
        <?php
        for ($i = 0; $i < 2; $i++) {
            include "./StudentCardView.php";
        }
        ?>
    </div>
</body>

</html>