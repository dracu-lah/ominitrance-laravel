@extends('layouts.second-layout') @section('content')
<div>
    <h1>i am the home page</h1>
    <!-- Open the modal using ID.showModal() method -->
    <button class="btn btn-primary" onclick="my_modal_2.showModal()">
        open modal
    </button>
    <dialog id="my_modal_2" class="modal">
        <div class="modal-box space-y-4">
            <div>
                <h3 class="text-lg font-bold">Hello!</h3>
                <p class="py-4">Press ESC key or click outside to close</p>
                <input
                    type="text"
                    placeholder="Type here"
                    class="input input-bordered w-full max-w-xs"
                />
            </div>
            <div class="flex items-end justify-end gap-x-2">
                <div class="modal-action">
                    <form method="dialog">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm">Close</button>
                    </form>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    Submit
                </button>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>
@stop
