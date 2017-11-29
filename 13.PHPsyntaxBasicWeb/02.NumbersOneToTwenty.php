<ul>
    <?php for ($i = 1; $i <= 20; $i++) : ?>
        <?php $color = $i % 2 == 0 ? "green" : "blue"; ?>
            <li style="color : <?=$color;?>"><?=$i?></li>
    <?php endfor; ?>
</ul>