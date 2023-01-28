<!DOCTYPE html>
<html lang="en" lang="ka" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>week3</title>
  <link href="./dist/output.css" rel="stylesheet">
</head>

<body class="">
    <div class="min-h-full">
      <?php require 'nav1.php' ?>
      <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
          <?php require 'back1.php' ?>
        </div>
      </header>
      <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
          <!-- // Searching component -->
          <div class="flex justify-center">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="bg-white p-6 rounded-lg shadow-md">
                <label for="search" class="block font-medium mb-2">Search by API_ID (1-83):</label>
                <input type="number" name="search" id="search" min="1" max="83" class="border border-gray-400 p-2 rounded-lg">
                <input type="submit" value="Search" class="bg-indigo-500 text-white p-2 rounded-lg hover:bg-indigo-600">
            </form>
          </div>
        </div>
      </main>
</body>
</html>