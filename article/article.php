<?php
require "../config-db.php";
$result = $conn->query("SELECT * FROM article");
$userNameResult = $conn->query("SELECT userName FROM user");

if ($userNameResult && $userNameResult->num_rows > 0) {
    $userNameRow = $userNameResult->fetch_assoc();
    $userName = $userNameRow['userName'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Post Card</title>
</head>

<body class="bg-gray-100">
    <!-- navbar -->
    <header class="bg-blue-600 text-white p-4 shadow-lg shadow-white">
        <div class="container mx-auto flex justify-between px-5 items-center">
            <h1 class="text-xl font-semibold"><?php echo htmlspecialchars($userName); ?></h1>
            <h1 class="text-2xl font-bold">ReadIt</h1>
            <nav class="flex gap-10 ">
                <ul class="flex space-x-4 items-center">
                    <li><a href="../home.php" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
                <a href="../home.php" class="bg-blue-500 text-white px-4 py-2 rounded w-20 mx-auto">Logout</a>
            </nav>
        </div>
    </header>

    <!-- <h1 id="title" class="text-4xl text-center">There's no Article for now</h1> -->

    <div class="fixed-button flex justify-end mb-2 fixed top-20 right-4 z-10">
        <button onclick="popup()"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full text-3xl">+</button>
    </div>

    <!-- article Form -->
    <form id="articleForm" method="post" action="./article-form.php"
        class="flex w-1/2 mx-auto bg-blue-100 mt-5 hidden p-5 rounded shadow-md flex-col">
        <div class="mb-4">
            <label class="block text-gray-700">Title</label>
            <input type="text" name="title" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Text</label>
            <textarea name="context" class="w-full p-2 border border-gray-300 rounded h-20" required></textarea>
        </div>
        <button type="submit" onclick="saveBtn()"
            class="bg-blue-500 text-white px-4 py-2 rounded w-20 mx-auto">Save</button>
    </form>


    <!-- Post Card -->
    <div class="container mx-auto grid grid-cols-3 gap-4 mt-10">
    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
    <div class="bg-white p-5 rounded shadow-md">
        <h1 class="text-2xl font-bold"><?php echo htmlspecialchars($row['title']); ?></h1>
        <p class="text-gray-500"><?php echo htmlspecialchars($row['context']); ?></p>
        <a href="#" class="text-blue-500 hover:underline">Read more</a>
        <div class="flex justify-end gap-1">
            <form method="post" action="edit.php" class="inline">
                <input type="hidden" name="articleId" value="<?php echo $row['articleId']; ?>">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-20 mt-2">Edit</button>
            </form>
            <form method="post" action="./delete-article.php" class="inline">
                <input type="hidden" name="articleId" value="<?php echo $row['articleId']; ?>">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded w-20 mt-2">Delete</button>
            </form>
        </div>
    </div>
    <?php
        }
    } else {
        echo "<h1 class='text-4xl text-center'>There's no Article for now</h1>";
    }
    ?>
</div>


    <script>
    const container = document.getElementById("articleForm");
    const title = document.getElementById("title");

    function popup() {
        container.classList.toggle("hidden");
        title.classList.toggle("hidden");
    }

    function saveBtn() {
        // alert("Article saved!");
        container.classList.add("hidden");
    }
    </script>
</body>

</html>