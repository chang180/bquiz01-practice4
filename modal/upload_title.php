<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">更新標題區圖片
</form>
<hr>
<table>
    <tr>
        <td style="text-align:right">標題區圖片</td>
        <td><input type="file" name="name"></td>
    </tr>
</table>
<div class="cent">
    <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
</div>
</form>