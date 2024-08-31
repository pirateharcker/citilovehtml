<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>CitYLove</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #0000FF, #800080);
            font-family: 'Poppins', sans-serif;
        }

        .container {
            
            background: #fff;
            width: 450px;
            border-radius: 16px;
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                        0 32px 64px -48px rgba(0, 0, 0, 0.5);
                      
        }

        /*chat Area CSS code */
        .chat-area header{
            display: flex;
            align-items: center;
            padding: 18px 30px;
        }
        .container img{
            object-fit: cover;
            border-radius: 50%;
        }

        .chat-area header .back-icon{
            font-size: 18px;
            color: #333;
        }

        .chat-area header img{
            height: 45px;
            width: 45px;
            margin: 0 15px;
        }

        .chat-area header span{
            font-size: 17px;
            font-weight: 500;
        }
        .chat-box{
            height: 500px;
            overflow-y: auto;
            background: #f7f7f7;
            padding: 10px 30px 20px 30px;
            box-shadow: inset 32px 32px -32px rgb(0 0 0 / 5%),
                        inset -32px 32px -32px rgb(0 0 0 / 5%);
        }
        .chat-box .chat{
            margin: 15px 0;
        }
        .chat-box .chat p{
            word-wrap: break-word;
            padding: 8px 16px;
            box-shadow: inset 0 0 32px rgb(0 0 0 / 8%),
                        inset 0 16px 16px -16px rgb(0 0 0 / 10%);
        }
        .chat-box .outgoing{
            display: flex;
        }
        .outgoing .details{
            margin-left: auto;
            max-width: calc(100% - 130px);
        }
        .outgoing .details p{
            background: linear-gradient(to right, #0000FF, #800080);
            color: #fff;
            border-radius: 18px 18px 0 18px;
        }
        .chat-box .incoming{
            display: flex;
            align-items: flex-end;
        }
        .chat-box .incoming img{
            height: 35px;
            width: 35px;
        }
        .incoming .details{
            margin-left: 10px;
            margin-right: auto;
            max-width: calc(100% - 130px);
        }
        .incoming .details p{
            color: #333;
            background: #fff;
            border-radius: 18px 18px 18px 0;
        }
        .chat-area .typing-area{
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;

        }
        .typing-area input{
            height: 45px;
            width: calc(100% - 58px);
            font-size: 17px;
            border: 1px solid #ccc;
            padding: 0 13px;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        .typing-area button{
            width: 55px;
            border: none;
            outline: none;
            background: linear-gradient(to right, #0000FF, #800080);
            color: #fff;
            font-size: 19px;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
        }

        @media (max-width: 768px) {
            .chat-box {
                height: 400px;
                padding: 10px;
            }

            .typing-area input {
                font-size: 15px;
                padding: 0 10px;
            }

            .typing-area button {
                width: 50px;
            }
        }

        @media (max-width: 480px) {
            .container {
                width: 100%;
                max-width: 100%;
                border-radius: 0;
            }

            .chat-area header {
                padding: 10px;
            }

            .chat-area header img {
                height: 35px;
                width: 35px;
            }

            .chat-area header span {
                font-size: 15px;
            }

            .chat-box {
                height: 350px;
            }

            .typing-area input {
                font-size: 14px;
            }
        }


    </style>
</head>
<body>
   <div class="container">
        <section class="chat-area">
            <header>
                <a href="" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="assets/images/ccitilove2.jpg" alt="">
                <div class="details">
                    <span>Divina Chou</span>
                    <p>En ligne</p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Salut bb. Comment tu vas ? Tu es disponible pour un plan ce soir ?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="assets/images/ccitilove6.jpg" alt="">
                    <div class="details">
                        <p>Salut Chérie. Je suis disponible, on se prend tout de suite ?</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe praesentium similique fuga veritatis debitis asperiores, distinctio consectetur. Rerum minima enim odio. At eaque, error veniam aspernatur provident quis unde.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="assets/images/ccitilove6.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe praesentium similique fuga veritatis debitis asperiores, distinctio consectetur. Rerum minima enim odio. At eaque, error veniam aspernatur provident quis unde.</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe praesentium similique fuga veritatis debitis asperiores, distinctio consectetur. Rerum minima enim odio. At eaque, error veniam aspernatur provident quis unde.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="assets/images/ccitilove6.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe praesentium similique fuga veritatis debitis asperiores, distinctio consectetur. Rerum minima enim odio. At eaque, error veniam aspernatur provident quis unde.</p>
                    </div>
                </div>
            </div>
            <form action="" class="typing-area">
                <input type="text" placeholder="Taper un message ici">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
   
    
   
</body>
</html>
