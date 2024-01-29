
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JABU JCC</title>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="shortcut icon" href="https://arena.mycredentials.ng/wp-content/uploads/2021/04/jabu.jpg" type="image/x-icon">
</head>
</head>

<body class="w-full h-full bg-gray-700 py-24 p-10 lg:px-96 lg:py-20">
    <div class="w-full h-full bg-white rounded py-16 p-8 shadow-md lg:w-full lg:flex lg:flex-col lg:py-20 lg:justify-center lg:items-center">
        <div class="flex flex-col items-center">
            <img class="w-24" src="https://arena.mycredentials.ng/wp-content/uploads/2021/04/jabu.jpg" alt="">
            <h2 class="text-xl text-slate-900 font-bold mb-2 text-center">JOSEPH AYO BABALOLA UNIVERSITY</h2>
            <h2 class="text-lg text-slate-900 mb-4 text-center">JABU CHAPEL CHOIR</h2>
        </div>
        <form id="choirForm" method="post" action="submit.php" aria-busy="" class="w-full h-full pb-3 lg:px-14">
        <div class="mb-4">
            <input type="text" id="fullname" name="fullname" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full placeholder:text-gray-800"
                placeholder="Fullname"  required>
          </div>
            <div class="mb-4">
                <select id="part" name="part" class="text-gray-800 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" required>
                    <option value="" disabled selected>Select Part</option>
                    <option value="1">Soprano</option>
                    <option value="2">Alto</option>
                    <option value="3">Tenor</option>
                    <option value="4">Bass</option>
                </select>
            </div>
            <div class="mb-4">
                <select id="gender" name="gender" class="text-gray-800 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" required>
                    <option value="" disabled selected>Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="mb-4">
                <select id="level" name="level" class="text-gray-800 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" required>
                    <option value="" disabled selected>Select Level</option>
                    <option value="1">100</option>
                    <option value="2">200</option>
                    <option value="3">300</option>
                    <option value="4">400</option>
                    <option value="5">500</option>
                </select>
            </div>
            <div class="mb-4">
                <input type="text" id="phone" name="phone" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full placeholder:text-gray-800"
                    placeholder="Phone Number"  required>
              </div>

            <button name="login" type="submit" class="w-full bg-blue-500 hover:bg-blue-900 text-white p-2 rounded shadow-lg font-bold text-lg hover:bg-slate-500 active:bg-slate-500">Submit</button>
        </form>
    </div>
    <script>
        document.getElementById('choirForm').addEventListener('submit', function(evt) {
          var phone = document.getElementsByName('phone')[0].value;
          if (phone.length !== 11) {
            alert('Phone number must be 11 digits long');
            evt.preventDefault();
          }
        });
      </script>
</body>
</html>
