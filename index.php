<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
    </head>
    <body>
        <?php
        $conn=mysqli_connect('localhost','root','','demo');
        $sql = "SELECT * FROM `players` ORDER BY `id` ";
        $resutl= mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($resutl))
        {
            $data[]=$row;
        }
        
        $html = '';
        foreach ($data as $value) {
            $html .= '
            <tr role="row">
                <td>'.$value['id'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['age'].'</td>
                <td>'.$value['national'].'</td>
                <td>'.$value['position'].'</td>
                <td>'.$value['salary'].' $</td>
                <td><a href="edit.php?id='.$value['id'].'">Edit</a></td>
                <td><a href="delete.php?id='.$value['id'].'"> Delete</a></td>
            </tr>';
        }
        ?>
        
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý cầu thủ</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Tên cầu thủ</th>
                    <th>Tuổi</th>
                    <th>Quốc tịch</th>
                    <th>Vị trí</th>
                    <th>Lương</th>
                    <th style="width: 7%;">Edit</th>
                    <th style="width: 10%;">>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr role="row">
                        <td>1</td>
                        <td>Lionel Messi</td>
                        <td>30</td>
                        <td>Argentina</td>
                        <td>Tiền Đạo</td>
                        <td>230000 $</td>
                        <td><a href="#">Edit</a></td>
                        <td><a href="#"> Delete</a></td>
                    </tr>
                    <?php  
                         echo $html;
                      ?>
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="add.php"><button id="button">Thêm cầu thủ</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>
        <tbody>
 
</tbody>
    </body>
</html>