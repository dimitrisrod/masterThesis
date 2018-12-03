<?php
header('Content-type: text/html; charset=utf-8');
echo "<title>Αποτελέσματα Αναζήτησης</title>";
echo "<body background='bg_main1.png'></body>";
echo "<form action='search.php'><input name='button' type='submit' value='Επιστροφή'></form>";

//1. check that a query has been submitted, send user back to search page otherwise

if(!isset($_REQUEST['query']) || empty($_REQUEST['query']))
{
	header("Location: http://localhost/site/search.php");
}
else
{
	$query = $_REQUEST['query'];
}

$distance = $_REQUEST['distance'];
if($distance=="YES")
{
  $dnum = $_REQUEST['dnum'];
  $query="\"{$query}\"~{$dnum}";
} 

$category = $_REQUEST['category'];
if($category=="ALL")
{
       $query1="id:{$query} OR title:{$query} OR descr:{$query} OR company:{$query}* OR model:{$query}* OR description:{$query} OR greekmarket:{$query} OR demands:{$query} OR energy:{$query} OR economy:{$query} OR us:{$query} OR website:*{$query}* OR info:*{$query}*";
}
else
{
      $query1=$category . $query;
}

if($category=="company:" OR $category=="model:")
{
 $query1 .= "*";
}

if($category=="website:" OR $category=="info:")
{
 $query1= "{$category}*{$query}*";
}

$market = $_REQUEST['greece'];
if($market!="")
{
        $query1="({$query1})";
	$query1 .=  $market;
}
$number = $_REQUEST['number'];
if($number=="1")
{
	$down = $_REQUEST['down'];
	$up = $_REQUEST['up'];
	$query1="({$query1})";
	$query1 .= " AND cost:[{$down} TO {$up}]";
}
$number1 = $_REQUEST['number1'];
if($number1=="1")
{
        $down1 = $_REQUEST['down1'];
        $up1 = $_REQUEST['up1'];
        $query1="({$query1})";
        $query1 .= " AND power:[{$down1} TO {$up1}]";
}

$number2 = $_REQUEST['number2'];
if($number2=="1")
{
        $down2 = $_REQUEST['down2'];
        $up2 = $_REQUEST['up2'];
        $query1="({$query1})";
        $query1 .= " AND capacity:[{$down2} TO {$up2}]";
}

$number3 = $_REQUEST['number3'];
if($number3=="1")
{
        $down3 = $_REQUEST['down3'];
        $up3 = $_REQUEST['up3'];
        $query1="({$query1})";
        $query1 .= " AND consumption:[{$down3} TO {$up3}]";
}

$number4 = $_REQUEST['number4'];
if($number4=="1")
{
        $down4 = $_REQUEST['down4'];
        $up4 = $_REQUEST['up4'];
        $query1="({$query1})";
        $query1 .= " AND ecoper:[{$down4} TO {$up4}]";
}

$cat = $_REQUEST['cat'];
if($cat!="")
{
        $query1="({$query1})";
        $query1 .=  $cat;
}

$dem = $_REQUEST['dem'];
if($dem!="")
{
        $query1="({$query1})";
        $query1 .=  $dem;
}

$eco = $_REQUEST['eco'];
if($eco!="")
{
        $query1="({$query1})";
        $query1 .=  $eco;
}

$usage = $_REQUEST['usage'];
if($usage!="")
{
        $query1="({$query1})";
        $query1 .=  $usage;
}


$energy = $_REQUEST['energy'];
if($energy!="")
{
        $query1="({$query1})";
        $query1 .=  $energy;
}

echo "<span style='text-align: center'><p><b>Η αναζήτησή σας ήταν: $query1 .</b></p></span>";
//2. if we have a query term, connect to Solr, query and grab the result

//our required includes
require_once("constants.php");
require_once("SolrPhpClient/Apache/Solr/Service.php");


//instantiate a Solr object
$solr = new Apache_Solr_Service(SOLRHOST, SOLRPORT, SOLRNAME);
//run the query
$results = $solr->search($query1, 0, 200);

//3. check the results - are there any? If not, display an appropriate message
if($results)
{
	$result_count = $results->response->numFound;
	echo "<span style='text-align: center'><p><b>Βρέθηκαν $result_count αποτελέσματα.</b></p></span>";
	if($result_count > 0)
	{
		//4. if there are result, iterate through and display

echo "<table border='2' style='background-color:#FFFFFF;border-collapse:collapse;border:2px solid #6699FF;color:#000000;width:400'>";
	  echo "<tr><th bgcolor='#6699FF'>ID</th>" .
			"<th bgcolor='#6699FF'>Κατηγορία</th>" .
			"<th bgcolor='#6699FF'>Είδος</th>" .
			"<th bgcolor='#6699FF'>Εταιρεία Κατασκευής</th>" .
			"<th bgcolor='#6699FF'>Μοντέλο</th>" .
			"<th bgcolor='#6699FF'>Περιγραφή Τεχνολογίας</th>" .
			"<th bgcolor='#6699FF'>Εφαρμογή στην Ελλάδα</th>" .
			"<th bgcolor='#6699FF'>Κόστος Επένδυσης(€)</th>" .
			"<th bgcolor='#6699FF'>Δυναμικότητα(L/d)</th>" .
                        "<th bgcolor='#6699FF'>Χωρητικότητα</th>" .
                        "<th bgcolor='#6699FF'>Κατανάλωση</th>" .
                        "<th bgcolor='#6699FF'>Ποσοστό εξοικονόμησης(%)</th>" .
                        "<th bgcolor='#6699FF'>Ενεργειακή Κλάση</th>" .
			"<th bgcolor='#6699FF'>Απαιτήσεις Συντήρησης</th>" .
			"<th bgcolor='#6699FF'>Δυνατότητες Επαναχρησιμοποίησης</th>" .
			"<th bgcolor='#6699FF'>Δυνατότητες Επεξεργασίας</th>" .
			"<th bgcolor='#6699FF'>Ιστότοπος</th>" .
			"<th bgcolor='#6699FF'>Πληροφορίες</th></tr>";
	  {
		  foreach($results->response->docs as $doc)
		  {
			  echo "<tr  onMouseOver=this.bgColor='#d2d2d2' onMouseOut=this.bgColor='#ffffff';><td>" . htmlspecialchars($doc->id) . "</td>" .
					  "<td>" . htmlspecialchars($doc->title) .  "</td>" .
					  "<td>" . htmlspecialchars($doc->descr)  . "</td>" .
					"<td>" . htmlspecialchars($doc->company) .  "</td>" .
					"<td>" . htmlspecialchars($doc->model) .  "</td>" .
					"<td>" . htmlspecialchars($doc->description) .  "</td>" .
					"<td>" . htmlspecialchars($doc->greekmarket) .  "</td>" .
					"<td>" . htmlspecialchars($doc->cost) .  "</td>" .
					"<td>" . htmlspecialchars($doc->power) .  "</td>" .
                                        "<td>" . htmlspecialchars($doc->capacity) .  "</td>" .
                                        "<td>" . htmlspecialchars($doc->consumption) .  "</td>" .
                                        "<td>" . htmlspecialchars($doc->ecoper) .  "</td>" .
                                        "<td>" . htmlspecialchars($doc->energy) .  "</td>" .
					"<td>" . htmlspecialchars($doc->demands) .  "</td>" .
					"<td>" . htmlspecialchars($doc->economy) .  "</td>" .
					"<td>" . htmlspecialchars($doc->us) .  "</td>" .
					"<td>" . htmlspecialchars($doc->website) .  "</td>" .
					  "<td>" . htmlspecialchars($doc->info) . "</td></tr>";
		  }
	  }
	  echo "</table>";
		
	}


}
?>
