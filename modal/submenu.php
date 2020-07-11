<form action="api/submenu.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">編輯次選單
</form>
<hr>
<table style="margin:auto;text-align:center" id="submenu">
    <tr>
        <td style="text-align:right">次選單名稱</td>
        <td style="text-align:right">次選單連結網址</td>
        <td style="text-align:right">刪除</td>
    </tr>
    <?php
    include_once "../base.php";
    $rows = $Menu->all(['parent' => $_GET['id']]);
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><input type="text" name="name[]" value="<?= $row['name']; ?>"></td>
            <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
        </tr>
    <?php } ?>
</table>
<div class="cent">
    <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
    <input type="hidden" name="parent" value="<?= $_GET['id']; ?>">
    <input type="submit" value="修改">
    <input type="reset" value="重置">
    <input type="button" value="更多次選單" onclick="more()">
</div>
</form>

<script>
    function more() {
        let row = `
        <tr>
        <td><input type="text" name="name2[]"></td>
        <td><input type="text" name="text2[]"></td>
        <td></td>
        </tr>
        `;
        $("#submenu").append(row);
    }
</script>