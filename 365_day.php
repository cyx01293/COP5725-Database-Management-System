<?php
$foo = "local variable";

echo '$foo in global scope: ' . $GLOBALS["foo"] . "<\br>";
echo '$foo in current scope: ' . $foo . "\n";
$location = "Albury";
$conn = oci_connect('yixing', 'CYXcyx1993', 'oracle.cise.ufl.edu/orcl:1521');
$stmt = "SELECT WindSpeed_9am FROM
(SELECT Name, dates, EXTRACT (YEAR FROM dates) AS YEAR, EXTRACT(MONTH FROM dates) AS MONTH,
Wind_note.windspeed_9am AS WindSpeed_9am, 
Rain_note.rainfall AS Rainfall, Temperature_note.Temp_9am AS TEMP_9AM
FROM Wind_note, Location, Rain_note, Temperature_note
WHERE Location.WID=Wind_note.WID AND Location.RID=Rain_note.RID
AND Location.TID=Temperature_note.TID)
WHERE YEAR=2016 and NAME = '$location'
ORDER BY dates ASC";

$stid = oci_parse($conn, $stmt);
// execute the query
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} else {
	// retrieve the results
	/* print "<p>The marks are as follows:</p>\n";
	print "<table cols=5 border=1>\n";
	print "<tr>\n";
	print "<th>Student ID</th>\n";
	print "<th>Surname</th>\n";
	print "<th>Forename</th>\n";
	print "<th>Module</th>\n";
	print "<th>Mark</th>\n";
    print "</tr>"; */
    $i = 0;
    $dataset = [];
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    	//echo '<tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">';
    	foreach ($row as $item) {
            
           // echo  ($item != null ? htmlentities($item, ENT_QUOTES) : "&nbsp") . "\n";
           //echo htmlentities($item, ENT_QUOTES);
           $item != null ? htmlentities($item, ENT_QUOTES) : 0;
           $item = floatval($item);
            $dataset[$i] = $item;
                $i ++;
                
            if($i == 366)
            {
                break;
            }
            
            
        }
        
    	//echo "</tr>\n";
    }
    
    //echo sizeof($dataset);
  
   echo $dataset[100];
	oci_close($conn);
	//echo "</table>\n";
}
?>
<!DOCTYPE HTML>

<html>
  <body>
    <table>
  <tr>
    <td>
      <svg id="a">
    </svg>
    <text class = 'announcement' id='a_text'></text>
  </td>
 
  </table>
    

  </body>
   <style>
  .announcement
  {
    margin-top: 2px;
    margin-left: 100px;
    font-size: 16px;
    height: 30px;
    width:200px;
    text-overflow: ellipsis;
    font-family: 'Times New Roman';
  }
  td
  {
    height: 700px;
    width: 1200px; 
  }
    table,tr,td{
      margin-left: 100px;
      border:solid 2px black;   
      align-items: center;
      font-family: Lucida Family;
    }
    .title
    {
      text-align: center;
    }
    .text
    {
      text-align: center;
      text-anchor: middle;
      dominant-baseline: middle;

    }

    #a{
      width: 1000px;
      height: 700px;
      position: relative;
      left: 0px;
      opacity: 1;
      text-align: center;
      font-size: 14px;
      line-height: 40px;
      margin-left: 100px;
    }
  </style>
  <script src="https://d3js.org/d3.v5.min.js"></script>
  












<script>
  // 图表的宽度和高度
var width = 600;
var height = 600;
// 预留给轴线的距离
var padding = { top: 50, right: 50, bottom: 50, left: 50 };
<?php $json = json_encode($dataset); ?>
//var dataset = [[1, 224], [2, 528], [3, 756], [4, 632], [5, 582], [6, 704], [7, 766], [8, 804], [9, 884], [10, 960], [11, 1095], [12, 1250],[13, 224], [14, 528], [15, 756], [16, 632], [17, 582], [18, 704], [19, 766], [20, 804]];
var dataset1 = <?php echo json_encode($dataset);?>;
var dataset=[];
for(var i =0;i<365; i++)
{
    dataset[i]=[i,dataset1[i]];
}
//alert (dataset[2]);


var min = d3.min(dataset, function(d) {
  return d[1];
})
var max = d3.max(dataset, function(d) {
  return d[1];
})

var xScale = d3.scaleLinear()
                .domain([1, 365])
                .range([0, width - padding.left - padding.right]);

var yScale = d3.scaleLinear()
                .domain([0, max])
                .range([height - padding.top - padding.bottom, 0]);

var svg = d3.select('#a')
            .append('svg')
            .attr('width', width + 'px')
            .attr('height', height + 'px');

var xAxis = d3.axisBottom()
              .scale(xScale);

var yAxis = d3.axisLeft()
              .scale(yScale);

svg.append('g')
  .attr('class', 'axis')
  .attr('transform', 'translate(' + padding.left + ',' + (height - padding.bottom) + ')')
  .call(xAxis);

svg.append('g')
  .attr('class', 'axis')
  .attr('transform', 'translate(' + padding.left + ',' + padding.top + ')')
  .call(yAxis);

var linePath = d3.line()
                .x(function(d){ return xScale(d[0]) })
                .y(function(d){ return yScale(d[1]) });

svg.append('g')
  .append('path')
  .attr('class', 'line-path')
  .attr('transform', 'translate(' + padding.left + ',' + padding.top + ')')
  .attr('d', linePath(dataset))
  .attr('fill', 'none')
  .attr('stroke-width', 3)
  .attr('stroke', 'green');

svg.append('g')
  .selectAll('circle')
  .data(dataset)
  .enter()
  .append('circle')
  .attr('r', 5)
  .attr('transform', function(d){
    return 'translate(' + (xScale(d[0]) + padding.left) + ',' + (yScale(d[1]) + padding.top) + ')'
  })
  .attr('fill', 'green');
  </script>
  </html>