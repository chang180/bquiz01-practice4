<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增主選單</form>
<hr>
<table>
    <tr>
        <td style="text-align:right">主選單名稱：</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td style="text-align:right">選單連結網址：</td>
        <td><input type="text" name="text"></td>
    </tr>
</table>
<div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
     <input type="submit" value="新增">
     <input type="reset" value="重置">
</div>
</form>