<div class="contact-section section">
    <div class="contact-container container">
        <div class="contact-content">
            <div class="column-left-form">
                <h4 class="column-left-h3"><?php echo get_field('contact_heading');?></h4>
                <p class="column-left-descr">
                <?php echo get_field('contact_form_descr');?>
                </p>
                <form action="path">
                    <input type="text" placeholder="Имя" class="name">
                    <input type="email" placeholder="Телефон" class="email">
                    <div class="private">
                        <input type="checkbox" name="policy" id="">
                        <p class="private-text">
                            Я принимаю условия 
                        </p>
                        <a href="#" class="link">Политики конфиденциальности</a>
                    </div>
                    <button type="submit">Заказать звонок</button>
                </form>
            </div>
            <div class="column-right-addres">
                <h4 class="column-right-h4 number"><?php echo get_field('contact_number');?></h4>
                <p class="adress"><?php echo get_field('contact_addres');?></p>
                <a href="http://" class="link">Смотреть на карте</a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <hr>
        <div class="footer-content">
            <p class="copyright">ESENIN 2020</p>
            <p class="develop">
                <a href="" class="link">Разработка сайта EVGHENY</a>
            </p>
        </div>
    </div>
</footer>
    

</body>

<?php
wp_footer();
?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</html>