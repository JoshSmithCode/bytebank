<x-layout>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-8 mt-8">
            <div class="bg-white rounded shadow shadow-md p-4">
                <form action="/users/signup" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="font-semibold text-xl">Sign Up</div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <x-input>
                            <x-slot:label>First Name</x-slot:label>
                            <x-slot:name>first-name</x-slot:name>
                            <x-slot:inputType>text</x-slot:inputType>
                        </x-input>
                        <x-input>
                            <x-slot:label>Last Name</x-slot:label>
                            <x-slot:name>last-name</x-slot:name>
                            <x-slot:inputType>text</x-slot:inputType>
                        </x-input>
                        <x-input>
                            <x-slot:label>Email</x-slot:label>
                            <x-slot:name>email</x-slot:name>
                            <x-slot:inputType>text</x-slot:inputType>
                        </x-input>
                        <x-input>
                            <x-slot:label>Password</x-slot:label>
                            <x-slot:name>password</x-slot:name>
                            <x-slot:inputType>password</x-slot:inputType>
                        </x-input>
                    </div>

                    <div class="mt-8">
                        <x-submit-button>
                            Sign Up
                        </x-submit-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
