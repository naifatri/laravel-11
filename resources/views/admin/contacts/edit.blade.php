<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Edit Kontak</h2>
                <a href="{{ route('admin.dashboard.contacts.index') }}" 
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition duration-200">
                    Kembali
                </a>
            </div>

            <!-- Form untuk mengupdate kontak -->
            <form action="{{ route('admin.dashboard.contacts.update', $contact) }}" method="POST">

                @csrf
                @method('PUT')

                <!-- Input Nama -->
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" 
                           id="name"
                           name="name" 
                           value="{{ old('name', $contact->name) }}" 
                           required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('name')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Input Email -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" 
                           id="email"
                           name="email" 
                           value="{{ old('email', $contact->email) }}" 
                           required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('email')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Input Subjek -->
                <div class="space-y-2">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                    <input type="text" 
                           id="subject"
                           name="subject" 
                           value="{{ old('subject', $contact->subject) }}" 
                           required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('subject')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Input Pesan -->
                <div class="space-y-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea id="message"
                              name="message" 
                              rows="4"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('message', $contact->message) }}</textarea>
                    @error('message')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tombol Update -->
                <div class="flex justify-end">
                    <button type="submit" 
                            class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
