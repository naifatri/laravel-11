<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-6">Contact Details</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            @if(isset($contact))
                <h3 class="text-xl font-semibold">Name: {{ $contact->name }}</h3>
                <p class="mt-2"><strong>Email:</strong> {{ $contact->email }}</p>
                <p class="mt-2"><strong>Subject:</strong> {{ $contact->subject }}</p>
                <p class="mt-2"><strong>Message:</strong> {{ $contact->message }}</p>
            @else
                <p class="text-red-500">Contact details are not available.</p>
            @endif
        </div>

        <a href="{{ route('admin.dashboard.contacts.index') }}" class="mt-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back</a>

    </div>
</body>
</html>
