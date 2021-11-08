<div class="col-12 py-2">
    共 <?= $result->num_rows ?> 筆
</div>
<?php if ($result->num_rows > 0) :
    while ($row = $result->fetch_assoc()) {
?>
        <div class="col-lg-4 mb-3">
            <div class="card">
                <figure class="ratio ratio-16x9 mb-2">
                    <div>
                        <img class="cover-fit" src="/img/<?= $row["picture"] ?>" alt="">
                    </div>
                </figure>
                <div class="p-2">
                    <!-- <div class="text-muted"><?= $row["category_name"] ?></div> -->
                    <div class="text-muted"><?= $category[$row["category"]] ?></div>
                    <!-- 上面一行為透過關聯式陣列顯示出來，$category是一新陣列，其key值是資料表product的category欄位，剛好對應到資料表category的欄位id -->
                    <!-- 建立(新的)空陣列$category的key值是關聯式陣列$rowCategory的id(category資料表的欄位id)，對應到的value值是$rowCategory的name(category資料表的欄位name)。 -->
                    <!-- 資料表product的欄位category可對應到資料表category的欄位id(他們是相等的)，再利用關聯式陣列存取key值(資料表category的欄位id)，所對應的value值即為資料表category的name，讓資料表product可以直接透過欄位category連到資料表category的欄位name。 -->
                    <h3 class="h5"><?= $row["name"] ?></h3>
                    <div>$ <?= $row["price"] ?></div>
                </div>
            </div>
        </div>
    <?php
    }
else : ?>


<?php endif; ?>