<?php 
    include ("./partials/head.php");
    include ("./partials/header.php");
?>
    <main>
        <!-- texte deroulant -->
        <div class="promo">
            <p>offres promotionnelles !!</p>
        </div>
        <div class="shop">
            <div class="container">
                <img src="./img/modele1.png" class="vetement"  alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/image.png" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/pullVertBackRouge.png" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/OIG (7).jpg" class="vetement"  alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/OIG (8).jpg" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/OIG (9).jpg" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
        </div>

    </main>
    <style>*, ::after, ::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background-color: #B8B8FF   ;
    font-family: Lato,Helvetica,sans-serif;
    overflow-x: hidden;
}

.home {
    display: flex;
    justify-content: center;
    align-content: center;
    /* background-color: red; */
    height: 120px;

}




.shop {
    display: flex;
    flex-direction: row;
    justify-content: center;
    height: 150vh;
    flex-wrap: wrap;
}

.carousel {
    display: flex;
    height: 40vh;
    background-color: transparent;
    width: 30vw;

}
.home img {
    width: 50px;
    height: 50px;
    opacity: 0.6;
    border: solid black 5px;
    background-color: transparent;
    box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
}


.container{
    width: 360px;
    height: 400px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 20px;
    margin-left: 20px;
    background-color: #FEFAE0;
    border-radius: 10px;
    margin-top: 30px;
    transition: 0.4s;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

}

.container .vetement{
    width: 100%;
    height: 80%;
    border-radius: 10px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.container .shoppingBasket{
    height: 70px;
    width: 70px;
    transition: 0.3s;
    opacity: 0.8;
    margin-top: 5px;
    /* border: solid black; */
    border-radius: 10px;
    position: relative;
    
}

.container .shoppingBasket:hover{
    height: 80px;
    width: 80px;
    transition: 0.3s;
}

.container:hover{
    width: 390px;
    height: 430px;
    transition: 0.4s;
    background : rgb(156, 152, 152);
}

.promo{
    width: 100vw;
    height: 100px;
    /* background-color: red; */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}




</style>
    <?php include ("./partials/footer.php"); ?>