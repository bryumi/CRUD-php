<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

include('styles.php');

?>
    <title>Home</title>

</head>

<body>
    <?php
        include ('header.php');
    ?>
    <main>
        <section>
            <div class="text">
                <a href="cadastro.php">

                    <p>Adicione suas séries favoritas</p>
                </a>
            </div>
            <div class="content">

                <div class="imgContainer">
                    <style>
                    section {
                        padding: 5rem;
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: center;
                        gap: 5rem;

                        width: 100%;
                        height: 100%;
                    }

                    .text p {
                        font-family: 'Sigmar', cursive;
                        color: #fff;

                        font-weight: 400;
                        font-size: 2rem;
                        background-color: #F952EB;
                        border-radius: 50px;
                        padding: 1rem;
                        
                    }
                    .text a{
                        text-decoration: none;
                        cursor: pointer;
                    }
                    .content {
                        position: relative;
                        border-top-left-radius: 20%;
                        border-bottom-right-radius: 20%;
                        border-top-right-radius: 10px;
                        border-bottom-left-radius: 10px;
                        width: 30rem;
                        height: 30rem;
                        background-color: #F952EB;

                    }

                    .imgContainer {
                        position: relative;
                        top: 2.5rem;
                        left: 2rem;
                        border-radius: 50%;
                        height: 25rem;
                        width: 25rem;
                        background-image: url(https://i.pinimg.com/564x/3c/65/e4/3c65e4e19db586ce7778f9028617812d.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                    }
                    </style>

                </div>
            </div>
        </section>
    </main>

</body>

</html>