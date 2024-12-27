<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur</title>
</head>
<body>

    <div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="index.php?action=submitAjouterEtudiant" method="POST" enctype="multipart/form-data">
            <div class="mb-5">
                <label for="nom" class="mb-3 block text-base font-medium text-[#07074D]">
                    Nom
                </label>
                <input type="text" name="nom" id="nom" placeholder="Full Nom" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="prenom" class="mb-3 block text-base font-medium text-[#07074D]">
                    Prénom
                </label>
                <input type="text" name="prenom" id="prenom" placeholder="Enter your prenom" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                    Email Address
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="mb-5">
                <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
                    Note
                </label>
                <input type="number" name="note" id="note" placeholder="Entrez la note (0-20)" step="0.1" min="0" max="20" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="mb-5">
                <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">
                    Image
                </label>
                <input type="file" name="image" id="image" placeholder="Enter your prenom" accept="image/*" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Book Appointment
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
