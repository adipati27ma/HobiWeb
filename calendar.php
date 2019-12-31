<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<div class="jzdbox1 jzdbasf jzdcal">';
echo '<div class="jzdcalt">';
echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center style="font-size:12px" style="font-family:sans-serif">';
echo "Today : ".date("F d, Y ",mktime(0,0,0,$month,$day,$year));
echo '<hr></td></tr>';
echo '<tr><td align=center>';
echo date(" F ",mktime(0,$month));
echo '</td></tr>';
echo '</table></div>';
echo '<table align="center" border="0" cellpadding=1 cellspacing=1 style="border:"0" solid #CCCCCC">
<tr>
<td align=center><span><font color=red>Mon</font></span></td>
<td align=center><span>Sun</span></td>
<td align=center><span>Tues</span></td>
<td align=center><span>Wed</span></td>
<td align=center><span>Thurs</span></td>
<td align=center><span>Fri</span></td>
<td align=center><span>Sat</span></td>
</tr>';
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td><span class='jzdb'> </span>
</td>";}
for ($d=1;$d<=$endDate;$d++) {
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
$fontColor="#000000";
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
echo "<td align=center valign=middle><span>$d</span></td>";
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
echo '</table>';
echo '</div>';
?>
