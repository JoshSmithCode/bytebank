<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? "ByteBank" }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="min-h-screen bg-teal-50">
        <div class="bg-white border-b-2 border-teal-200">
            <div class="container mx-auto py-4">
                <div class="text-lg font-bold text-teal-700">ByteBank</div>
            </div>
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
</body>

</html>
