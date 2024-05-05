@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <!-- component -->
        <div class="bg-gradient-to-bl flex font-bold mb-6 pl-4">
            <h1 class="text-3xl	">Admin Dashboard Management</h1>
        </div>
        <div class="bg-gradient-to-bl flex items-center justify-center">
            <div class="container mx-auto mx-auto p-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-2">
                    <!-- Replace this with your grid items -->
                    <div class="bg-white rounded-lg border p-4">
                        <div class="px-1 py-4">
                            <div class="font-bold text-xl mb-2">User Account</div>
                            <div class="grid grid-flow-col gap-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="w-12 h-12 fill-red-900" viewBox="0 0 640 512">
                                        <path
                                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-700 text-base">
                                        This is a simple blog card for user account example using Tailwind CSS.
                                    </p>
                                </div>
                            </div>
                            <a class="hidden mt-6 lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200"
                                href="{{ route('admin.user.create') }}">Create User</a>

                        </div>
                    </div>
                    <div class="bg-white rounded-lg border p-4">
                        <div class="px-1 py-4">
                            <div class="font-bold text-xl mb-2">Task User</div>
                            <div class="grid grid-flow-col gap-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-12 h-12 fill-red-900">
                                        <path fill-rule="evenodd"
                                            d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-700 text-base">
                                        This is a simple blog card example using Tailwind CSS. You can replace this text
                                        with your own blog content.
                                    </p>
                                </div>
                            </div>
                            <a class="hidden mt-6 lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200"
                                href="{{ route('admin.task.create') }}">Create Task</a>
                        </div>
                    </div>
                    <!-- Add more items as needed -->
                </div>
            </div>
        </div>

    </div>
@endsection
