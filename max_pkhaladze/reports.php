<!DOCTYPE html>
<html lang="en" lang="ka" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>week3 reports</title>
  <link href="./dist/output.css" rel="stylesheet">
</head>
<body class="">
    <div class="min-h-full">
    <?php require 'nav2.php' ?>
      <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">          
          <?php require 'back1.php' ?>
          <?php print "მოძიებული მონაცემები" ?>
        </div>
      </header>
      <main>
          <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">API_ID</th>
                        <th class="px-4 py-2">სახელი</th>
                        <th class="px-4 py-2">დაბადების თარიღი</th>
                    </tr>
                </thead>
                <tbody>
                  <?php require 'back2.php' ?>
                </tbody>
            </table>
        </div>
      </main>
</body>
</html>