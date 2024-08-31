<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

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
            font-family: 'Roboto', sans-serif;
        }

        .container {
            background: #d1c4e9;
            width: 90%;
            max-width: 450px;
            border-radius: 16px;
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                        0 32px 64px -48px rgba(0, 0, 0, 0.5);
        }

        /*Users Area CSS code */
        .users{
            padding: 20px 15px;
        }

        .users header,
        .users-list a{
            display: flex;
            align-items: center;
            padding-bottom: 20px;
            justify-content: space-between;
            border-bottom: 1px solid #e6e6e6;
        }
        .container img{
            object-fit: cover;
            border-radius: 50%;
        }
        :is(.users, .users-list) .content{
            display: flex;
            align-items: center;
        }
        .users header .content img{
            height: 50px;
            width: 50px;
            object-fit: cover;
            border-radius: 50%;
        }
        :is(.users, .users-list) .details{
            color: #000;
            margin-left: 15px;
        }
        :is(.users, .users-list) .details span{
            font-size: 18px;
            font-weight: 500;
        }
        .users header .logout{
            color: #fff;
            font-size: 17px;
            padding: 7px 15px;
            background: #333;
            border-radius: 5px;
        }
        .users .search{
            margin: 20px 0;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: space-between;
        }
        .users .search .text{
            font-size: 10px;
        }
        .users .search input{
            position: absolute;
            height: 42px;
            width: calc(100% -50px);
            border: 1px solid #ccc;
            padding: 0 13px;
            font-size: 16px;
            border-radius: 5px 0 0 5px;
            outline: none;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .users .search input.active{
            opacity: 1;
            pointer-events: auto;
        }
        .users .search button{
            width: 47px;
            height: 42px;
            border: none;
            outline: none;
            color: #333;
            background: #fff;
            cursor: pointer;
            font-size: 17px;
            border: 0 5px 5px 0;
            transition: all 0.2s ease;
        }
        .users .search button.active{
            color: #fff;
            background: #333;
        }
        .users .search button.active i::before{
                content: "\f00d";
        }
        .users-list{
            max-height: 350px;
            overflow-y: auto;
        }
        .users-list::-webkit-scrollbar{
            width: 0px;
        }
        .users-list a{
            margin-bottom: 15px;
            page-break-after: 10px;
            padding-right: 15px;
            border-bottom-color: #f1f1f1;
        }
        .users-list a:last-child{
            border: none;
            margin-bottom: 0px;
        }
        .users-list a .content img{
            height: 40px;
            width: 40px;
        }
        .users-list a .content p{
            color: #67676a;
        }
        .users-list a .status-dot{
            font-size: 12px;
            color: #468669;
        }
        /*We'll use this class name in php to show  offline status*/
        .users-list a .status-dot.offline{
            color: #ccc;
        }

    </style>
</head>
<body>
    <div class="container">
        <section class="users">
            <header>
                <div class="content">
                    <img src="assets/images/bnsein.jpg" alt="">
                    <div class="details">
                        <span>Divina Chou</span>
                        <p>En ligne</p>
                    </div>
                </div>
                <a href="#" class="logout">Déconnexion</a>
            </header>
            <div class="search">
                <span class="text">Choississez votre partenaire</span>
                <input type="text" placeholder="Entrer le pseudo pour rechercher...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="assets/images/ggon.jpg" alt="">
                        <div class="details">
                            <span>Alice Doe</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/images/nueperl.jpg" alt="">
                        <div class="details">
                            <span>Mirabelle Mi</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/images/slip.jpg" alt="">
                        <div class="details">
                            <span>Chantale Chou</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/images/ccitilove4.jpg" alt="">
                        <div class="details">
                            <span>Princessia Pi</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>
    
   
    <script src="assets/js/index.js"></script>
</body>
</html>
