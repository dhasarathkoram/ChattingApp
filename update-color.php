//include("connect.php");

$bg = $_REQUEST["msgbox"];
$txt = $_REQUEST["txt-color"];
session_start();
$uname = $_SESSION["uname"];

	$sql = mysqli_query($conn,"UPDATE colortb SET colortb.colorbg = '$bg', colortb.colortxt = '$txt' WHERE colortb.username = '$uname' ");

	if($sql)
	{
		header("Location: home.php");
	}
		
?>*/