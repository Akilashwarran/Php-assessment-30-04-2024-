<div class="dark:bg-gray-100 dark:text-gray-900">
	<div class="container flex flex-cols-12 mx-auto">
		<div class="flex flex-col justify-center col-span-12 align-middle dark:bg-gray-300 bg-no-repeat bg-cover lg:col-span-6 lg:h-auto" style="background-image: url('https://source.unsplash.com/random/640x480'); background-position: center center; background-blend-mode: multiply; background-size: cover;">
			 <!-- <div class="flex flex-col items-center p-8 py-12 text-center dark:text-gray-800">
				<span>12 June</span>
				<h1 class="py-4 text-5xl font-bold">Lorem, ipsum dolor sit amet consectetur adipisicing.</h1>
				<p class="pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, a!</p>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-7 h-7">
					<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg> -->
			</div> 
		</div>
        <?php
  $servername = "localhost";
  $username = "dckap";
  $password = "Dckap2023Ecommerce";
  $dbname = "DBtest"; 

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


$query = "SELECT ID, Title, CreatedAt, Content FROM blogs";
$result = mysqli_query($conn, $query);


if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>

<div class="dark:bg-gray-100 dark:text-gray-900">
    <div class="container flex flex-col mx-auto">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="flex flex-col col-span-6 p-6 divide-y lg:col-span-6 lg:p-10 dark:divide-gray-300">
                <div class="card flex-col w-full pt-6 pb-4 space-y-2">
                    <span class="createdat"><?php echo $row['CreatedAt']; ?></span>
                    <h1 class="title text-3xl font-bold"><?php echo $row['Title']; ?></h1>
                    <p class="content"><?php echo $row['Content']; ?></p>
                    <a href="blogdetailview.php" class="inline-flex items-center py-2 space-x-2 text-sm dark:text-violet-600" onclick="storeId(<?php echo $row['ID']; ?>)">
                        <span>Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



		<!-- <div class="flex justify-center items-center flex-col col-span-12 p-6 divide-y lg:col-span-6 lg:p-10 dark:divide-gray-300">
			<div class="card pt-6 pb-4 space-y-2">
				<span class="createdat">12 June</span>
				<h1 class="title text-3xl font-bold" >Lorem ipsum dolor sit.</h1>
				<p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, a!</p>
				<a rel="to-detail noopener noreferrer" href="blogdetail.php" class="inline-flex items-center py-2 space-x-2 text-sm dark:text-violet-600">
					<span>Read more</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
						<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</a>
			</div>
			
			
		</div> -->
	</div>
</div>