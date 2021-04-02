<div>
    @include('livewire.components.session-message')
    <div class="flex justify-center">
        <button wire:click="addToCart()" class="px-4 py-2 bg-gradient-to-r from-indigo-400 to-blue-500 flex rounded my-2 text-white font-black hover:shadow-2xl duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#fff" width="25">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Pinjam Buku
        </button>
    </div>
</div>
