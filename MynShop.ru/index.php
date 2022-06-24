<!DOCTYPE html>
<html lang="en, ru" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/svg/favico.svg" type=”image/x-icon”>.
    <title>Myn Store</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--хедер-->
    <header class="header">
        <div class="wrapper">
         <div class="header__wrapper">
                       
            <div class="header__logo">
                <a href="/" class="header__logo link">
                   <img src="./img/svg/pixlr-bg-result 1.svg" alt="Myn Store" class="header__logo-pic">
                </a>
               </div>
           
           <nav class="header__nav">
           <ul class="header__list">
               <li class="header__item">
                   <a href="#!" class="header__link">Catalog</a>
               </li>
               <li class="header__item">
                   <a href="#!" class="header__link">Mane page</a>
               </li>
               <li class="header__item">
                   <a href="#!" class="header__link">Info</a>
               </li>
               <li class="header__item">
                   <a href="#!" class="header__link">Feedback</a>
               </li>
               
   
           </ul>
   
           </nav>
   
         </div>
        </div>
    </header>

    <main class="main">
        <!-- интро-->
        <section class="intro">
            <div class="wrapper">

                <h1 class="intro__title">
                    Позвольте себе отдохнуть, пока ваш аккаунт развивается.
                </h1>
                <p class="intro__subtitle">
                    MynStore-это магазин игровых услуг, по разлиным играм, таким как: Dota 2, World Of Warcraft(офа, пиратки) с быстрым выполнением заказов и стопроцентной гарантией работы.
                </p>
                <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
               <script type="text/javascript" src="form.js"></script>
                <form action="Action.php" class="search-form">
                    <fieldset class="search-form__wrap">
                     <p class="search-form__info">
                        <input id="game" type="text" name="user-like-to-play" class="search-form__field" placeholder="Во что вы любите играть?">
                        <input id="platform" type="text" name="user-platform" class="search-form__field" placeholder="На чем вы любите играть?">
                        <button type="sumbit" class="search-form__submit">
                        Search
                        </button>
                     </p>
                    </fieldset>
                </form>
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__wrap">
                <h2 class="benefits__title">
                    Каталог услуг.
                </h2>
                <div class="benefits__cards">
                    <div class="benefits__card">

                    <div class="benefits__card-pic">
                        <img src="./img/svg/table1.svg" alt="Dota 2" class="benefits__card-thumb">
                    </div>
                    <div class="benefits__card-pic">

                        <img src="./img/svg/table2.svg" alt="WOW" class="benefits__card-thumb">
                    </div>

                    <p class="benefits__card-desc">
                        В таблицах выше предоставлены все услгуи по играм Dota 2 и World Of Warcraft,а так же сроки их выполнения и прайс на них.
                    </p>
                    </div>
        
                    <div class="benefits__card">
                        </div>
                        <div class="benefits__card">
                        
                            </a>
                        </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>