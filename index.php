<?php
require_once('./caesar_cipher.php');

$encryptedText = "";

if(isset($_POST['input'])) {
  $encryptedText = Encipher($_POST['input'], 3);
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="h-screen bg-gray-100">
      <div class="p-5 flex flex-col">
          <div class="bg-white border p-3 rounded-sm shadow-sm">
              <h5 class="font-medium text-xl subpixel-antialiased">Caesar encryption</h5>

              <div class="pt-5">
                  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="grid grid-cols-6">
                      <div class="col-span-3">
                        <label class="block pb-1">Text for encryption</label>
                        <input
                          type="text"
                          class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:shadow-outline w-full"
                          name="input"
                          placeholder="Enter text"
                        />
                      </div>
                      <div class="col-start-5 col-span-2">
                        <h5 class="block text-size-lg font-medium">Entrycpted text</h5>
                        <?php echo $encryptedText ?>
                      </div>
                    </div>
                    <div class="pt-4">
                      <button
                        type="submit"
                        class="py-2 px-3 bg-green-500 text-white hover:bg-green-400 shadow"
                      >Submit</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</body>
</html>