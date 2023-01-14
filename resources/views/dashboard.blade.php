
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="sm:px-12 mx-auto">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mx-auto">
                <div class="p-6 text-gray-900 mx-auto">
                    <div class="card mx-auto" style="width: 18rem;">

                        <div class="card-body mx-auto">

                            <h2 class="card-title m-1 text-center">Card title</h2>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                            <center>
                            <x-primary-button class="ml-4 mt-5 mx-auto">
                                <form action="{{ route('payment') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="amount" id="" value="200">
                                    <input type='submit' value='Pay with PayPal'>
                                </form>
                            </x-primary-button>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
