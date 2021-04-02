<div>
    <button wire:click="openModal()" id="navAction"
        class="mx-auto lg:mx-1 text-gray-80 rounded mt-4 lg:mt-0 py-2 bg-gradient-to-r from-indigo-400 to-blue-500 font-black px-6 outline-none shadow opacity-80 flex text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#fff" width="25">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
    </button>
    @if ($modal)
        @include('livewire.components.cart-modal')
    @endif
</div>
