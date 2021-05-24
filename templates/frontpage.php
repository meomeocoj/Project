<?php include 'header.php'; ?>
<!-- how to know which title it is -->
<?php echo $title; ?>
<?php foreach($hotels as $hotel):
echo "<h5>$hotel->id</h5>";
endforeach;
?>
<?php include 'footer.php'; ?>
