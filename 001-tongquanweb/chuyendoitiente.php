<style>
    select {
        margin-left: 47px;
    }

    element.style {
        margin-left: 50px;
    }

    th {
        width: 172px;
    }
</style>
<form action="" method="post">
<table>
    <tr>
        <th>Nhập sô tiền muốn đổi</th>
        <th>Đơn vị tiền nhập vào</th>
        <th>Đơn vị tiền muốn đổi</th>
    </tr>
    <tr>
        <td><input type="text" name="doitien" value=" "></td>
        <td>
            <select name="select1">
                <option value="VietNam">VietNam</option>
                <option value="USD">USD</option>
            </select>
        </td>
        <td>
            <select name="select2">
                <option value="USD">USD</option>
                <option value="VietNam">VietNam</option>
            </select>
        </td>
        <td>
            <button>Convert</button>
        </td>
    </tr>
    <td>
        <p id="ketqua"></p>
    </td>
</table>
</form>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sotien = $_POST['doitien'];
    $tienvao = $_POST['select1'];
    $tienra = $_POST['select2'];
    $tien = 0;
    if($tienvao=='VietNam' && $tienra == 'USD'){
        $tien = $sotien / 23000;
        echo $tien;
    }else if($tienvao=='USD' && $tienra == 'VietNam'){
        $tien = $sotien * 23000;
        echo number_format($tien);

    }else if ($tienvao=='USD' && $tienra == 'USD') {
        echo $sotien;
    }else if ($tienvao=='VietNam' && $tienra == 'VietNam') {
        echo $sotien;
    }
}