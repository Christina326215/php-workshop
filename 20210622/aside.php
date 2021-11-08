<div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action" href="product-list.php?p=1">產品列表</a>
        <?php foreach ($category as $key => $value) { ?>
            <a class="list-group-item list-group-item-action" href="product-type.php?type=<?= $key ?>"><?= $value ?></a>
            <!-- 資料表category的關聯式陣列用foreach迴圈跑出key對應的值，key是1或2，對應到顯現出來的值是men或weman。 -->
        <?php } ?>
    </div>
    <div class="py-2">
        <form action="product-filter.php">
            price:
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">></span>
                <input type="text" class="form-control" name="min" <?php if (isset($_GET["min"])) : ?> value="<?= $_GET["min"] ?>" <?php endif; ?>>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    << /span>
                        <input type="text" class="form-control" name="max" <?php if (isset($_GET["max"])) : ?> value="<?= $_GET["max"] ?>" <?php endif; ?>>
            </div>
            <button class="btn btn-info" type="submit">篩選</button>
        </form>
    </div>
</div>