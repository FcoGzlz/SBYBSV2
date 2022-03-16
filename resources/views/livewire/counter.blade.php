<div>
   <button wire:click="increment">+</button>
   <button wire:click="substract">-</button>
   <h1> {{ $count }}</h1>



   @if (session()->has('message'))
   <div class="alert alert-success">
       {{ session('message') }}
   </div>
   @else
   <div class="alert alert-danger">
    {{ session('messageE') }}
</div>
@endif
</div>
