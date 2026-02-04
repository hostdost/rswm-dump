<?php

global $wpdb;
//$table  = $wpdb->prefix.'enquire_report';
// $wpdb->query("UPDATE enquire_report set enquire_report.date = '2020-08-20' WHERE id = 4674 ");
$table  = 'enquire_report';
$pagenum = isset($_GET['pagenum']) ? absint($_GET['pagenum']) : 1;
$limit = 100; // number of rows in page
$offset = ($pagenum - 1) * $limit;
$total = $wpdb->get_var("SELECT COUNT(`id`) FROM $table");
$num_of_pages = ceil($total / $limit);

if (isset($_GET['startDate']) && isset($_GET['enddate'])) {
	$startDate = $_GET['startDate'];
	$enddate = $_GET['enddate'];
	// $startDate_format= date_create($startDate);
	// $enddate_format= date_create($enddate);
	// $startDate =  date_format($startDate_format,"d-m-Y 00:00:00");
	// $enddate = date_format($enddate_format,"d-m-Y 23:59:59");
	$sql = "SELECT * FROM $table WHERE ($table.date) BETWEEN '{$startDate}' AND '{$enddate}' ORDER BY `id` DESC";
	//$sql =  "SELECT * FROM $table WHERE $table.date BETWEEN '$startDate_format' AND '$enddate_format' Order by id desc ";
	//echo $sql;
} else {
	$sql =  "SELECT * FROM $table Order by id desc LIMIT $offset, $limit";
	//echo $sql;	
}

$result = $wpdb->get_results($sql);
if (isset($_GET['export'])) {
	// echo "<pre>";
	// print_r($result);
	// die;
	$file = time() . 'report.csv';
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="' . $file . '"');
	header('Pragma: no-cache'); // no cache
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // expire date


	$fp = fopen('php://output', 'w');
	fputcsv($fp, array('id', 'name', 'email', 'phone', 'company', 'location', 'message', 'post_id', 'page_name', 'date'));

	foreach ($result as $report_data) {
		fputcsv($fp, array($report_data->id, $report_data->name, $report_data->email, $report_data->phone, $report_data->company, $report_data->target_market_location, $report_data->message, $report_data->post_id, $report_data->page_name, $report_data->date));
	}
	fclose($fp);
	exit;
}

?>

<h2>Enquiry Form Data</h2>

<form method="get" action="" style="float: right;margin-bottom: 20px;margin-right: 10px;">
	<input type="hidden" name="page" value="inquiry-data" />
	<label><strong>From</strong> </label>
	<input type="date" name="startDate" value="<?php echo $_GET['startDate']; ?>" />
	<label><strong>To</strong> </label>
	<input type="date" name="enddate" value="<?php echo $_GET['enddate']; ?>" />
	<input type="submit" name="submit" class="button button-primary">
	<?php if (isset($_GET['startDate']) && isset($_GET['enddate'])) : ?>
		<br><br>
		<a class="button button-primary" href="<?php echo site_url() ?>/wp-admin/admin.php?page=inquiry-data" style="float: right;">Clear </a>
	<?php endif; ?>
</form>

<?php
if (isset($_GET['startDate']) && isset($_GET['enddate'])) : ?>
	<a href="<?php echo site_url() ?>/wp-admin/admin.php?page=inquiry-data&startDate=<?php echo isset($_GET['startDate']) ? $_GET['startDate'] : ''; ?>&enddate=<?php echo isset($_GET['enddate']) ? $_GET['enddate'] : ''; ?>&export=table&noheader=1" target="_blank">
		<button class="csv-export button button-primary"> Export</button>
	</a>
<?php else : ?>
	<a href="<?php echo site_url() ?>/wp-admin/admin.php?page=inquiry-data&pagenum=<?php echo $pagenum; ?>&export=table&noheader=1" target="_blank">
		<button class="csv-export button button-primary"> Export</button>
	</a>
<?php endif; ?>

<table class="wp-list-table widefat fixed striped posts">
	<thead>
		<tr>
			<td><label>#ID</label></td>
			<td><label>Name</label></td>
			<td><label>Email</label></td>
			<td><label>Mobile</label></td>
			<td><label>Company</label></td>
			<td><label>Location</label></td>
			<td><label>Post ID</label></td>
			<td><label>Page Name</label></td>
			<td><label>Message</label></td>
			<td><label>Date</label></td>
		</tr>
	</thead>
	<tbody id="the-list" data-wp-lists="list:post">
		<?php if (!empty($result)) : foreach ($result as $key => $value) : ?>
				<tr>
					<td><?= $value->id; ?></td>
					<td><?= $value->name; ?></td>
					<td><?= $value->email; ?></td>
					<td><?= $value->phone; ?></td>
					<td><?= $value->company; ?></td>
					<td><?= $value->target_market_location; ?></td>
					<td><?= $value->post_id; ?></td>
					<td><?= $value->page_name; ?></td>
					<td><?= $value->message; ?></td>
					<td><?php echo $value->date; ?></td>
				</tr>

			<?php endforeach; ?>
		<?php else : ?>
			<tr>
				<td colspan="4">No data available</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>

<?php
$page_links = paginate_links(array(
	'base' => add_query_arg('pagenum', '%#%'),
	'format' => '',
	'prev_text' => __('&laquo;', 'text-domain'),
	'next_text' => __('&raquo;', 'text-domain'),
	'total' => $num_of_pages,
	'current' => $pagenum
));

if ($page_links) {
	echo '<div class="tablenav report_page_liks"><div class="tablenav-pages" style="margin: 1em 0;padding: 10px;">' . $page_links . '</div></div>';
}
?>

<style type="text/css">
	.report_page_liks .page-numbers {
		font-size: 24px;
	}
</style>