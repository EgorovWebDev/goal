
<head>
    <link rel="stylesheet" href="source/css/card.css">

</head>   
<section class="head">
     <h2>КОРЗИНА</h2>
     <a href="catalog" class="purchases">&lt; продолжить покупки</a>
 </section>

    <form class="mane" action="order.php">
        <section class="left">
            <img src="source/img/basket/wer.jpg">
            <div class="description">
                <p class="boots">Бутсы&shy; FUTURE&shy;  19.1&shy;  NETFIT&shy; FG/AG</p>
                <p>Цвет: Красный</p>
                <p>Размер: 37</p>
                <p>Артикул : 0000000</p>
                <div class="price">
                    <select value="2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                    <p>17 500 р</p>
                </div>
                <div class="actions">
                    <a href="">Изменить</a>
                    <a href="">Удалить</a>
                </div>
            </div>
        </section>
        <section class="right">
            <p>ДЕТАЛИ ЗАКАЗА</p>
            <div class="line"></div>
            
            <p><span>Сумма</span> <span>17 500 р.</span></p>
            <p class="result"><span>Итого</span> <span>17 500 р.</span></p>
            
            <div class="line"></div>
            <p>ПРОМО-КОД</p>
            <input type="text">
            <input type="submit" value="ОФОРМИТЬ ЗАКАЗ" class=""> 
        </section>
    </form>