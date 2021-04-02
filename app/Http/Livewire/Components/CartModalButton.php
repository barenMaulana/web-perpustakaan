<?php

namespace App\Http\Livewire\Components;

use App\Models\Book;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Arr;

class CartModalButton extends Component
{
    public  $modal = false,
            $cartBooks = [],
            $borrow_date,
            $return_date;

    public function render()
    {
        $this->borrow_date = date("M - d - Y");
        if(session('bookID')){
            $this->cartBooks = Book::whereIn('id',session('bookID'))->get();
        }
        return view('livewire.components.cart-modal-button');
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function removeBook(Request $request,$index)
    {
        // ambil data session
        $session_data = session('bookID');

        // ubah data dari session 
        Arr::pull($session_data, $index);

        // rapihkan array
        $session_data = Arr::flatten($session_data);

        // menghapus session buku
        $request->session()->forget('bookID');
        
        // buat baru session buku dengan data baru
        $request->session()->put('bookID',$session_data);

        // refresh
        $this->render();
    }
}
