<?php
include_once 'KnowledgeUnitCRUD.php';
echo beginHtml("View ACM KnowledgeUnit");
echo headerbar();
echo adminmenu();
echo acmcolumn();
echo startcolumn2();

session_start();
if(isset($_GET["id"]))
{
	if(is_numeric($_GET["id"]) )
	{
		$unitId = $_GET["id"];
		$unitArray = getKnowledgeUnitById($unitId);
		if(!empty($unitArray))
		{
?>
			<h3>Knowledge Unit</h3><hr/>
			<b>Knowledge Unit Name:</b><?php echo $unitArray["name"]; ?><br/>
			<b>Knowledge Area Name:</b><?php echo $unitArray["knowledgeAreaName"]; ?><br/>
			<b>Coverage Area:</b><?php echo $unitArray["coverageHours"]; ?><br/>
			<b>Core:</b><?php echo $unitArray["isCore"]; ?><br/>
<?php 
		}
	}
}

echo endcolumn2();
echo footer();
echo endHtml();