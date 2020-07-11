<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增校園映像圖片</form>
<hr>
<table>
    <tr>
        <td style="text-align:right">校園映像圖片</td>
        <td><input type="file" name="name"></td>
    </tr>
</table>
<div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
     <input type="submit" value="新增">
     <input type="reset" value="重置">
</div>
</form>