<div>
    <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
          <!-- Add margin if you want to see some of the overlay behind the modal-->
          <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
              <p class="text-2xl font-bold">Kembalikan buku?</p>
              <button type="button" wire:click="closeReturnModal()" class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                  <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
              </button>
            </div>
            <div class="flex justify-end pt-2">
              <button wire:click="returnBook({{$book->id}},{{$sanction[$key]}},{{$book->book_id}})" class="px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-100 hover:text-indigo-400 mr-2">Return</button>
              <button wire:click="closeReturnModal()" class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
            </div>
            
          </div>
        </div>
    </div>
</div>
