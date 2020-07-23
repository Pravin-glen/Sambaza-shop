<?php>
$connect=msqli_connect("localhost","root","","e_commerce");
$output='';
$sql="SELECT *FROM products ORDER BY id DESC"
$result=msqli_querry($connect, $sql);
$output='
    <div class="table table=bordered">
        <tr>
            <th width="10%">id</th>
            <th width="10%">name</th>
            <th width="10%">description</th>
            <th width="10%">imgurl</th>
            <th width="10%">price</th>
            <th width="10%">categoryid</th>
            <th width="10%">add</th>
            <th width="10%">delete</th>
            
        </tr>


if(mysql_num_rows($result) >0)
{
    while($row=mysqli_fetch_array($result))
    {
        $output .='<td>'.$row["id"].'</td>
                   <td class="name" data-id1="'$row["id"]'" contentededittable>'.$row["name"].'</td>
                   <td class="description" data-id2="'$row["id"]'" contentededittable>'.$row["description"].'</td>
                   <td class="imgurl" data-id3="'$row["id"]'" contentededittable>'.$row["imgurl"].'</td>
                   <td class="price" data-id4="'$row["id"]'" contentededittable>'.$row["price"].'</td>
                   <td class="categoryid" data-id5="'$row["id"]'" contentededittable>'.$row["categoryid"].'</td>
                   <td class="featured" data-id6="'$row["id"]'" contentededittable>'.$row["featured"].'</td>
                   <td><button name="btn-add" id="btn_add" data-id7="'.$row["id"].'">add</button></td>
                   <td><button name="btn-add" id="btn_delete" data-id7='.$row["id"].'">delete</button></td>
        ';           
    }
        $output .= '<tr>'
        <td></td>
        <td id="name"conte></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

}
else{
    $output .='<tr>
                   <td colspan="7">Data not found</td>
               </tr>';   
}
