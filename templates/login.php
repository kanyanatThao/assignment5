
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-yellow-100 min-h-screen flex flex-col">

<?php include 'header.php' ?>

<main class="flex-grow flex items-center justify-center">

    <div class="bg-yellow-50 p-8 rounded-2xl shadow-xl w-full max-w-md border border-yellow-200">

        <h2 class="text-2xl font-bold text-yellow-800 text-center mb-6">
            เข้าสู่ระบบ
        </h2>

        <?php if(isset($error)) : ?>
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 text-sm">
                <?= $error; ?>
            </div>
        <?php endif ; ?>

        <form action="" method="POST" class="space-y-4">

            <div>
                <label class="block text-yellow-800 font-medium mb-1">
                    Email *
                </label>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="example@mail.com" 
                    required
                    class="w-full px-4 py-2 border border-yellow-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                >
            </div>

            <div>
                <label class="block text-yellow-800 font-medium mb-1">
                    Password *
                </label>
                <input 
                    type="password" 
                    name="password" 
                    placeholder="••••••••" 
                    required
                    class="w-full px-4 py-2 border border-yellow-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                >
            </div>

            <button 
                type="submit"
                class="w-full bg-yellow-300 text-yellow-900 font-semibold py-2 rounded-lg hover:bg-yellow-400 transition"
            >
                เข้าสู่ระบบ
            </button>

        </form>

    </div>

</main>

</body>
</html>