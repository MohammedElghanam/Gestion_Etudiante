<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <base href="http://localhost:8080/">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Liste des Étudiants</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class=" w-full fixed h-20 border-b border-gray-200 flex justify-between items-center px-8">
        <img src="./uploads/LOGO3.jpg" class=" w-20 h-20 " alt="">
        <a href="/index.php?action=ajouterEtudiant" class="text-white text-sm bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-lg">Create Etudiant</a>
    </div>

    <div class="h-screen grid grid-cols-12 justify-start items-start gap-4 bg-withe p-14 pt-28 ">


        <!-- Card start -->
        <?php
            if (isset($etudiants) && is_array($etudiants) && !empty($etudiants)) {
                foreach ($etudiants as $etudiant) {
                    ?>
                    <div class="col-span-4 bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg">
                        <div class="border-b px-4 pb-6">
                            <div class="text-center my-4">
                            <img class="h-32 w-32 rounded-full border-4 border-gray-400 mx-auto my-4"
                                src="/uploads/<?= htmlspecialchars($etudiant['image']) ?>" 
                                alt="Student Image">

                                <div class="py-2">
                                    <h3 class="font-bold text-2xl text-gray-800 mb-1">
                                        <?= htmlspecialchars($etudiant['nom']) ?>
                                    </h3>
                                    <div class="flex justify-between items-center text-gray-700">
                                        <h1><?= htmlspecialchars($etudiant['email']) ?></h1>
                                        <p class="px-3.5 py-0.5 rounded-2xl bg-green-500 bg-opacity-40 text-white">
                                            <?= htmlspecialchars($etudiant['note']) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 px-2">
                                <a href="index.php?action=updateEtudiant&id=<?= htmlspecialchars($etudiant['id']) ?>" 
                                    class="flex-1 rounded-full bg-green-600 text-white antialiased font-bold hover:bg-green-700 px-4 py-2 text-center">
                                    Update
                                </a>
                                <form action="index.php?action=deleteEtudiant" method="POST" class="flex-1 rounded-full border-2 border-red-400 font-semibold text-red-400 px-4 py-2 text-center">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($etudiant['id']) ?>">
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>Aucun étudiant trouvé.</p>";
            }
        ?>

        <!-- Card end -->

</div>


</body>
</html>
