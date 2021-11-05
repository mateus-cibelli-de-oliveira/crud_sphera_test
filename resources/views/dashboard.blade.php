<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-2xl">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-5 lg:px-7">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-center">
                        @include('admin.posts.create-company')
                    </div>
                </div>
            </div><br>
            <div class="p-6 bg-white border-b border-gray-200">
                <button type="submit">
                    <a href="{{ url('/posts/register-product') }}" class="no-underline"><b class="text-purple-600">Cadastrar Produto</b></a>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
