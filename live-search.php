<?php
session_start();
$search_value=$_POST["search"];
$dbname=$_SESSION['team'];
$conn=mysqli_connect("localhost","root","","stats") or die ("failed");
$sql="SELECT * from $dbname where name LIKE '%{$search_value}%' ";
$result=mysqli_query($conn,$sql) or die ("failed");
$output="";
if (mysqli_num_rows($result) > 0)
{
  $output= '
  BATTING
  <center><table width="1500px" padding="15px" style="font-size:28px;">
  <th>Name </th>
    <th>Format</th>
        <th>Mat</th>
        <th>NO</th>
          <th>Runs</th>
            <th>HS</th>
              <th>Ave</th>
                <th>SR</th>
                  <th>100</th>
                    <th>50</th>
                      <th>4s</th>
                        <th>6s</th>
                        <th>Balls</th>
                        <th>RunsGiven</th>
                        <th>Wkts</th>
                        <th>Econ</th>
                        ';
                while ($row=mysqli_fetch_assoc($result))
                {
                 $output .="
                            <tr><td>{$row["name"]}</td>
                            <td>{$row["format"]} </td>
                            <td>{$row["mat"]} </td>
                            <td>{$row["no"]} </td>
                            <td>{$row["runs"]} </td>
                            <td>{$row["hs"]} </td>
                            <td>{$row["ave"]} </td>
                            <td>{$row["sr"]} </td>
                            <td>{$row["hundreds"]} </td>
                            <td>{$row["fifties"]} </td>
                            <td>{$row["fours"]} </td>
                            <td>{$row["sixes"]} </td>
                            <td>{$row["balls"]} </td>
                            <td>{$row["runsgiven"]} </td>
                            <td>{$row["wkts"]} </td>
                            <td>{$row["econ"]} </td>
                             </tr>";
                  }
              $output .="</table></center>";
              mysqli_close($conn);
              echo $output;
            }
            else {
                echo "not found";
            }
?>
