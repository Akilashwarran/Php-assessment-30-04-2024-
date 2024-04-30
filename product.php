<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

    <div class="border-b mb-5 flex justify-between text-sm">
        <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
        
            <a href="#" class="font-semibold inline-block">Products</a>
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

    $sql = "SELECT Name, Price, Description, Image FROM products"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">';
       
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card rounded overflow-hidden shadow-lg flex flex-col cursor-pointer" onclick="storeAndNavigate(this)" data-name="' . htmlspecialchars($row["Name"]) . '" data-price="' . htmlspecialchars($row["Price"]) . '" data-description="' . htmlspecialchars($row["Description"]) . '" data-image="https://www.pexels.com/photo/silver-laptop-and-white-cup-on-table-7974/pexels-photo-7974.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">';
            echo '<div class="relative"><a href="#">';
            echo '<img class="image w-full" src="Assets/pexels-veeterzy-303383.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" alt="' . htmlspecialchars($row["Name"]) . '">';
            echo '<div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>';
            echo '</a><div class="price text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3">' . htmlspecialchars($row["Price"]) . '</div></div>';
            echo '<div class="px-6 py-4 mb-auto">';
            echo '<a href="#" class="name font-medium text-lg inline-block hover:text-indigo-600">' . htmlspecialchars($row["Name"]) . '</a>';
            echo '<p class="description text-gray-500 text-sm">' . htmlspecialchars($row["Description"]) . '</p>';
            echo '</div></div>';
        }
        echo '</div>';
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</div>



