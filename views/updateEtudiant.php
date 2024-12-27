<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mettre à jour Étudiant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold text-center text-[#07074D] mb-6">Mettre à jour Étudiant</h1>
            <form action="index.php?action=submitUpdateEtudiant" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= htmlspecialchars($etudiant['id']) ?>">

                <!-- Nom -->
                <div class="mb-5">
                    <label for="nom" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nom
                    </label>
                    <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($etudiant['nom']) ?>" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <!-- Prénom -->
                <div class="mb-5">
                    <label for="prenom" class="mb-3 block text-base font-medium text-[#07074D]">
                        Prénom
                    </label>
                    <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($etudiant['prenom']) ?>" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <!-- Email -->
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email
                    </label>
                    <input type="email" name="email" id="email" value="<?= htmlspecialchars($etudiant['email']) ?>" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <!-- Note -->
                <div class="mb-5">
                    <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
                        Note
                    </label>
                    <input type="number" name="note" id="note" value="<?= htmlspecialchars($etudiant['note']) ?>" step="0.1" min="0" max="20" required
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <!-- Image -->
                <div class="mb-5">
                    <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">
                        Image
                    </label>
                    <input type="file" name="image" id="image" accept="image/*"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
