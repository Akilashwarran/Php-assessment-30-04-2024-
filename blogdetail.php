<div class="dark:bg-gray-100 dark:text-gray-900">
<?php

$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$dbname = "DBtest";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$blogid = $_SESSION['blogId'];


$sql = "SELECT b.Title, b.Content, b.Status, b.CreatedAt, u.Name AS authorName
        FROM blogs b
        INNER JOIN Users u ON b.AuthorID = u.ID
        WHERE b.ID = $blogid";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo '<div class="container grid grid-cols-12 mx-auto dark:bg-gray-50">
                <div class="flex flex-col p-6 col-span-full row-span-full lg:col-span-8 lg:p-10">
                  <div class="flex justify-start">
                    <span class="Status px-2 py-1 text-xs rounded-full dark:bg-violet-600 dark:text-gray-50">' . $row['Status'] . '</span>
                  </div>
                  <h1 class="Title text-3xl font-semibold">' . $row['Title'] . '</h1>
                  <p class="Content flex-1 pt-2">' . $row['Content'] . '</p>
                  
                  <div class="flex items-center justify-between pt-2">
                    <div class="flex space-x-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 dark:text-gray-600">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                      </svg>
                      <span class="Author-Name self-center text-sm">' . $row['authorName'] . '</span>
                    </div>
                    <span class="CreatedAt text-xs">' . $row['CreatedAt'] . '</span>
                  </div>
                </div>
              </div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>