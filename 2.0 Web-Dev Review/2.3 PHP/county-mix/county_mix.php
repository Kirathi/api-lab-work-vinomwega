<?php 

// a string of county data
$county_data = "1. Mombasa. – Abdulswamad Nassir – ODM,
2. Kwale. – Fatuma Achani – UDA,
3. Kilifi. – Gideon Mung’aro – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Issa Abdallah Timamy – ANC,
6. Taita-Taveta. – Andrew Mwadime – Independent,
7. Garissa. – Nathif Jama – ODM,
8. Wajir. – Ahmed Abdullahi – ODM,
9. Mandera. – Mohamed Adan Khalif –UDM,
10. Marsabit – Mohamud Ali – ODM,
11. Isiolo – Abdi Hassan Guyo – Jubilee,
12. Meru – Kawira Mwangaza – Independent,
13. Tharaka Nithi – Muthomi Njuki – UDA,
14. Embu – Cecily Mbarire – UDA,
15. Kitui – Julius Malombe – Wiper,
16. Machakos – Wavinya Ndeti – Wiper,
17. Makueni – Mutula Kilonzo – Wiper.,
18. Nyandarua – Moses Kiarie – UDA,
19. Nyeri – Mutahi Kahiga – UDA,
20. Kirinyaga. – Ann Waiguru – UDA,
21. Murang’a – Irungu Kang’ata – UDA,
22. Kiambu. – Kimani Wamatangi – Jubilee,
23. Turkana. – Jeremiah Lomurkai – ODM,
24. West Pokot. – Simon Kachapin. – UDA,
25. Samburu. – Jonathan Leleliit – UDA,
26. Trans-Nzoia. – George Natembeya – DAP-K,
27. Uasin gishu. – Jonathan Bii – UDA,
28. Elgeyo Marakwet. – Wisley Rotich – UDA,
29. Nandi. – Stephen Sang – UDA,
30. Baringo – Benjamin Cheboi. – UDA,
31. Laikipia – Joshua Irungu – UDA,
32. Nakuru. – Susan Kihika – UDA,
33. Narok – Patrick Ole Ntutu – UDA,
34. Kajiado. – Joseph Ole Lenku – ODM,
35. Kericho. – Dr. Erick Mutai – UDA,
36. Bomet. – Hillary Barchok – UDA,
37. Kakamega. – Fernandes Barasa – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Ken Lusaka – Ford Kenya,
40. Busia. – Paul Otuoma – ODM,
41. Siaya. – James Orengo. – ODM,
42. Kisumu. – Anyang’ Nyong’o. – ODM,
43. Homabay. – Gladys Wanga – ODM,
44. Migori. – Ochillo Ayacko – ODM,
45. Kisii. – Simba Arati – ODM,
46. Nyamira. – Amos Nyaribo - UPA,
47. Nairobi. – Johnson Sakaja – UDA";


//You should NOT modify anything above this line

// Your code starts here

//echo $county_data; //echo or print. $county data is a variable

//splitting the data  


                                                                                                                                                                                                                                                                                                                                
/*
$small_string = "vin vin";
$small_array = explode(' ',$small_string);

//print $small_array;
print "<br/>";
var_dump($small_array);

print "<br/>";

print_r($small_array);

//echo and print are for primitive data types.cannot  display array

*/


$county_array = explode(",",$county_data);
//print "<h1> The array <h1/>";
//print "<br/>";
//var_dump($county_array);

//print "<h1> The content in the array <h1/>";
/*
echo $county_array[0]."<br/>";
echo $county_array[39]."<br/>";
echo $county_array[20]."<br/>";
*/

/*

print "<h1> The second part <h1/>";  


print_r(explode( '–',$county_array[0]) ); echo "<br/>";
print_r(explode( '–',$county_array[17]) ); echo "<br/>";
print_r(explode( '–',$county_array[35]) ); echo "<br/>";
print_r(explode( '–',$county_array[42]) ); echo "<br/>";
print_r(explode( '–',$county_array[2]) ); echo "<br/>";
print_r(explode( '–',$county_array[37]) ); echo "<br/>";
*/
echo'<table border=1 cellspacing=5 cellpadding=5>';
echo'<thread>';
echo'<tr>';
echo'<th>#</th> <th>County</th>';
echo'<th>Govenor</th> <th>Party</th> ';
echo'</tr>';
echo'</thead>';


foreach ($county_array as $key => $row):
    echo"<tr>";
       // print $row;
       $cell = explode('–',$row);
       foreach($cell as $key => $cell):
        //echo"<td>$cell</td>";
        if($key == 0){
            //1.Mombasa
            //2.Kwale
            $temp = explode('.',$cell);
            echo '<td>'.$temp[0].'</td>';
            echo '<td>'.$temp[1].'</td>';
        }else{
            echo "<td>$cell</td>";
        }
       endforeach;
       
    echo"</tr>";

endforeach;

echo '</table>';


//Assignment
/*   
*/