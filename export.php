<?php
header('Content-type: text/plain; charset=utf-8');
  require('constants.php');
  $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBSCHEMA);
  if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
if (!$mysqli->set_charset('utf8')) {

      printf("Error loading character set utf8: %s\n", $mysqli->error);

  }

/* Select queries return a resultset */
if ($result = $mysqli->query('SELECT * FROM products'))
 {
  printf("To Solr κατέταξε στο ευρετήριο %d σειρές.\n", $num_rows = $result->num_rows);
//declare an empty array to hold our data to send to Solr
	require_once("SolrPhpClient/Apache/Solr/Service.php");
    $documents = array();
        $solr = new Apache_Solr_Service(SOLRHOST,SOLRPORT,SOLRNAME);
    while ($row = $result->fetch_object())
{
        // For each result, create a new Solr doc
        $document = new Apache_Solr_Document();
	$document->id =  $row->id;
	$document->title  = $row->title;
	$document->descr  = $row->descr;
        $document->company  = $row->company;
	$document->model = $row->model;
	$document->description  = $row->description;
	$document->greekmarket  = $row->greekmarket;
	$document->cost  = $row->cost;
	$document->power  = $row->power;
	$document->demands  = $row->demands;
	$document->economy  = $row->economy;
	$document->us  = $row->us;
	$document->website  = $row->website;
	$document->info  = $row->info;
        $document->capacity  = $row->capacity;
        $document->consumption  = $row->consumption;
        $document->ecoper  = $row->ecoper;
        $document->energy  = $row->energy;

        //add document to array
        $documents[] = $document;
}
    if(!empty($documents))
{
            $solr->addDocuments($documents);
        $solr->commit4();
        $solr->optimize4();
    }
  /* free result set */
 $result->close();
 }
 ?>
