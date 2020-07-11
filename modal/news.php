<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增最新消息資料</form>
<hr>
<table>
    <tr>
        <td style="text-align:right">最新消息資料內容</td>
        <td><textarea name="text" cols="60" rows="5"></textarea></td>
    </tr>
</table>
<div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
     <input type="submit" value="新增">
     <input type="reset" value="重置">
</div>
</form>